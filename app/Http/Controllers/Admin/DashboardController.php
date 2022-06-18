<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Tour;
use App\Models\Location;
use App\Models\User;


use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::count();
        $customer = User::count();
        $tour = Tour::count();
        $location = Location::count();
        return view('admin.dashboard', compact('checkouts', 'customer', 'tour', 'location'));
    }
}
