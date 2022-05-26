<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\UserController as Users;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\TourCategoryController;
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;
use App\Http\Controllers\Admin\DiscountController as AdminDiscount;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('tour-list', [HomeController::class, 'tours'])->name('tour-list');
Route::get('tour/detail', [HomeController::class, 'tourDetail'])->name('tour-detail');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('login/admin', function () {
    return view('auth.user.login');
})->name('login.admin');

//socialite resource
route::get('sign-in-google', [Users::class, 'google'])->name('user.login.google');
route::get('auth/google/callback', [Users::class, 'handleProviderCallback'])->name('user.login.callback');

// midtrans route
Route::get('payment/success', [CheckoutController::class, 'midtransCallback']);
Route::post('payment/success', [CheckoutController::class, 'midtransCallback']);
//management

Route::middleware(['auth'])->group(function () {
    //checkout
    Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
    Route::get('checkout/{camp:slug}', [CheckoutController::class, 'create'])->name('checkout.create');
    Route::post('checkout/{camp}', [CheckoutController::class, 'store'])->name('checkout.store');

    //dashboard
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('dashboard/checkout/invoice/{checkout}', [CheckoutController::class, 'invoice'])->name('user.checkout.invoice');

    

    Route::prefix('user/dashboard')->namespace('User')->name('user.')->group(function(){
        Route::get('/', [UserDashboard::class, 'index'])->name('dashboard');
    });

    Route::prefix('admin')->middleware('role:admin')->name('admin.')->group(function (){
        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('index');
        Route::resource('permission', PermissionController::class);
        Route::resource('role', RoleController::class);
        Route::resource('user', UserController::class);

        Route::resource('location', LocationController::class);
        Route::resource('tour-category', TourCategoryController::class);
        Route::resource('payment-method', PaymentMethodController::class);
        //admin checkout
        Route::post('checkout/{checkout}', [AdminCheckout::class, 'update'])->name('checkout.update');

        //admin discount
        Route::resource('discount', AdminDiscount::class);
    });

});



require __DIR__.'/auth.php';
