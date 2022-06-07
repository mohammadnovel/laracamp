<?php

namespace App\Http\Controllers\Admin;

use App\Traits\XIForm;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Http\Requests\TourRequest;
use App\Models\Tour;
use App\Models\TourImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TourController extends Controller
{
    private $module, $model, $form;
    protected $repository;
    use XIForm;

    public function __construct(Tour $repository, FormBuilder $formBuilder)
    {
        $this->module = 'tour';
        $this->route = 'admin.tour';
        $this->repository = $repository;
        $this->formBuilder = $formBuilder;
        $this->form = 'App\Forms\TourForm';
        $this->path = 'vetours/tours';

        View::share('module', $this->module);
        View::share('route', $this->route);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!$request->user()->can($this->module . '.view')) return notPermited();

        if ($request->ajax()) {
            $data = $this->repository->orderBy('created_at', 'DESC');

            return DataTables::of($data)

                ->addColumn('description', function ($data) {
                    return  Str::limit(data_get($data, 'description'), 100, ' (...)');
                })
                ->addColumn('action', function ($data) use ($request) {
                    $buttons[] = ['type' => 'detail', 'route' => route($this->route . '.show', $data->id), 'label' => 'Detail', 'action' => 'primary', 'icon' => 'share'];
                    $buttons[] = ['type' => 'edit', 'route' => route($this->route . '.edit', $data->id), 'label' => 'Edit', 'icon' => 'edit'];
                    $buttons[] = ['type' => 'delete', 'label' => 'Delete', 'confirm' => 'Are you sure?', 'route' => route($this->route . '.destroy', $data->id)];

                    return $this->icon_button($buttons, true);
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.' . $this->module . '.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (!$request->user()->can($this->module . '.create')) return notPermited();

        $data['form'] = $this->formBuilder->create($this->form, [
            'method' => 'POST',
            'url' => route($this->route . '.store'),
            'enctype' => 'multipart/form-data'
        ]);

        return view('pages.' . $this->module . '.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TourRequest $request)
    {

        if (!$request->user()->can($this->module . '.create')) return notPermited();

        DB::beginTransaction();
        try {
            $data = $request->all();
        // dd($data);
            $data['slug'] = Str::slug($request->title);
            $post = $this->repository->create($data);

            foreach ($data['tour_image'] as $key => $value) {
                // $name = time().'.'.$value->extension();
                $name = $value->getClientOriginalName();
                $path = $value->storeAs($this->path, $name, 'public');
                // $data[] = $name; 
                // $ordering = $key->index + 1;
                $data_image = [
                    'tour_id' => $post->id,
                    // 'ordering' => $ordering,
                    'path' => $path
                ];
                TourImage::create($data_image);
            }

            // gilog("Create " . $this->module, $post, $data);
            DB::commit();
            flash('Success create ' . $this->module)->success();
        } catch (\Exception $ex) {
            DB::rollBack();
            flash($ex->getMessage())->error();
        }
        return redirect()->route($this->route . '.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if (!$request->user()->can($this->module . '.view')) return notPermited();

        $get = $this->repository->with(['tour_category', 'tour_images'])->find($id);
        $data['detail'] = $get;
        $detail = new Tour();
        $data['shows'] = $detail->getFillable();
        return view('pages.' . $this->module . '.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if (!$request->user()->can($this->module . '.update')) return notPermited();

        $get = $this->repository->with(['tour_category', 'tour_images'])->find($id);
        $data['form'] = $this->formBuilder->create($this->form, [
            'method' => 'PUT',
            'url' => route($this->route . '.update', $id),
            'enctype' => 'multipart/form-data',
            'model' => $get
        ]);
        $data['data'] = $get;
        $data['isEdit'] = true;
        // dd($data);

        return view('pages.' . $this->module . '.create', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TourRequest $request, $id)
    {
        if (!$request->user()->can($this->module . '.update')) return notPermited();

        DB::beginTransaction();
        try {
            $data = $request->all();
            // dd($data);
            $post = $this->repository->find($id);
            // if ($request->hasFile('image')) {
            //     $path = Storage::disk('spaces')->putFile($this->path, $request->image, 'public');
            //     $data['image'] = str_replace('https://', 'https://' . env('DO_SPACES_BUCKET') . '.', env('DO_SPACES_ENDPOINT')) . '/' . $path;
            // }
            if (!empty($data['tour_image'])) {
                TourImage::whereTourId($id)->forceDelete();
                foreach ($data['tour_image'] as $key => $value) {
                    $name = $value->getClientOriginalName();
                    $path = $value->storeAs($this->path, $name, 'public');
                    $data_image = [
                        'tour_id' => $post->id,
                        // 'ordering' => $ordering,
                        'path' => $path
                    ];
                    TourImage::create($data_image);
                }
            }

            $post->update($data);

            gilog("Create " . $this->module, $post, $data);
            DB::commit();
            flash('Success update ' . $this->module)->success();
        } catch (\Exception $ex) {
            DB::rollBack();
            flash($ex->getMessage())->error();
        }
        return redirect()->route($this->route . '.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if (!$request->user()->can($this->module . '.delete')) return notPermited('json');

        try {
            DB::transaction(function () use ($id) {
                $get = $this->repository->find($id);
                // if (count($get->tour_category) > 0) $get->tour_category()->delete();
                $get->delete($id);
                gilog("Delete " . $this->module, $get, ['notes' => @request('notes')]);
            });
            $data['message'] = 'Success delete ' . $this->module;
            $status = 200;
        } catch (\Exception $ex) {
            $data['message'] = $ex->getMessage();
            $status = 500;
        }
        return response()->json($data, $status);
    }
}
