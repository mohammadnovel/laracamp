<?php

namespace App\Http\Controllers\Admin;

use App\Traits\XIForm;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    private $module, $model, $form;
    protected $repository;
    use XIForm;

    public function __construct(Article $repository, FormBuilder $formBuilder)
    {
        $this->module = 'article';
        $this->route = 'admin.article';
        $this->repository = $repository;
        $this->formBuilder = $formBuilder;
        $this->form = 'App\Forms\ArticleForm';
        $this->path = 'vetours/article';

        View::share('route', $this->route);
        View::share('module', $this->module);
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
                ->addColumn('short_description', function ($data) {
                    return  Str::limit(data_get($data, 'short_description'), 100, ' (...)');
                })
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
    public function store(ArticleRequest $request)
    {
        if (!$request->user()->can($this->module . '.create')) return notPermited();

        try {
            DB::transaction(function () use ($request) {
                $data = $request->all();
                if (!empty($request->image)) {
                    $data['image'] = $request->file('image')->store(
                        $this->path, //tempatnya
                        'public' //agar public
                    );
                }

                if (!empty($request->thumbnail)) {
                    // $storage = Storage::disk('spaces')->putFile($this->path, $request->thumbnail, 'public');
                    // $data['thumbnail'] =  $storage;
                    $data['thumbnail'] = $request->file('thumbnail')->store(
                        $this->path, //tempatnya
                        'public' //agar public
                    );
                }

                $post = $this->repository->create($data);
                
            });
            flash('Success create ' . $this->module)->success();
        } catch (\Exception $ex) {
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

        $get = $this->repository->find($id);
        $data['detail'] = $get;
        $detail = new Article();
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

        $get = $this->repository->find($id);
        $data['form'] = $this->formBuilder->create($this->form, [
            'method' => 'PUT',
            'url' => route($this->route . '.update', $id),
            'model' => $get,
            'enctype' => 'multipart/form-data'
        ]);

        $data['detail'] = $get;
        $data['detail']['published_at'] = \Carbon\Carbon::parse($data['detail']['published_at'])->format('Y-m-d H:i:s');
        return view('pages.' . $this->module . '.create', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        if (!$request->user()->can($this->module . '.update')) return notPermited();

        try {
            DB::transaction(function () use ($id, $request) {
                $data = $request->all();

                if (!empty($request->image)) {
                    $storage = Storage::disk('spaces')->putFile($this->path, $request->image, 'public');
                    $data['image'] = str_replace('https://', 'https://' . env('DO_SPACES_BUCKET') . '.', env('DO_SPACES_ENDPOINT')) . '/' . $storage;
                }

                if (!empty($request->thumbnail)) {
                    $storage = Storage::disk('spaces')->putFile($this->path, $request->thumbnail, 'public');
                    $data['thumbnail'] = str_replace('https://', 'https://' . env('DO_SPACES_BUCKET') . '.', env('DO_SPACES_ENDPOINT')) . '/' . $storage;
                }

                $post = $this->repository->find($id);
                $post->update($data);
                
            });
            flash('Success update ' . $this->module)->success();
        } catch (\Exception $ex) {
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
                $get->delete($id);
                
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
