<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
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

    public function tours()
    {
        return view('main.tour-list');
    }

    public function tourDetail()
    {
        return view('main.tour-detail');
    }
}
