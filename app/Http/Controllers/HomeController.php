<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Tour;
use Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        switch (Auth::user()->is_admin) {
            case 1:
                return redirect(route('admin.index'));
                break;
            case 2:
                return redirect(route('vendor.index'));
                break;
            default:
                return redirect(route('user.dashboard'));
                break;
        }
    }

    public function tours(Request $request)
    {
        $tours = Tour::query()
        ->with(['tour_images','location','tour_category'])
        ->orderBy('created_at', 'desc')->paginate(12);
        return view('main.tour-list', compact('tours'));
    }

    // public function tourSearch(Request $request)
    // {
    //     $tours = Tour::query()
    //     ->with(['tour_images','location','tour_category'])
    //     ->whereTitle($request->search)
    //     ->orderBy('created_at', 'desc')
    //     ->paginate(12)
    //     ->get();

    //     return view('main.tour-list', compact('tours'));

        
    // }

    public function tourDetail()
    {
        return view('main.tour-detail');
    }
}
