<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\MailController;


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
});
Route::get('send-mail', [MailController::class, 'index']);
Route::get('/trangchu', function () {
    return view('layouts.home');
});
Route::prefix('vi')->group(function(){
    Route::get('/trangchu',[HomeController::class,'index'])->name('trangchu');
    Route::get('/diemden',[HomeController::class,'diemden'])->name('diemden');
    Route::get('/tintuc',[HomeController::class,'tintuc'])->name('tintuc');
    Route::get('/chitiettin',[HomeController::class,'chitiettin'])->name('chitiettin');
    Route::get('/khachsan',[HomeController::class,'khachsan'])->name('khachsan');

});
Route::prefix('en')->group(function(){
    
});
Auth::routes();
Route::prefix('admin')->group(function(){
        // Route::get('/',[HomeController::class,'index'])->name('home');
        Route::get('/',[AdminController::class,'index'])->name('home');
        // Route::get('province',  'province')->name('province');
        // Route::get('role',[UserController::class,'role'])->name('user.role');
        // Route::get('create-role',[UserController::class,'create_role'])->name('create-role');
        // Route::get('permission',[UserController::class,'permission'])->name('user.permission');
        // Route::get('create-permission',[UserController::class,'create_permission'])->name('create-permission');
        Route::get('/phanquyen',[UserController::class,'phanquyen'])->name('phanquyen');
        // Route::resource('role',[UserController::class]);
        Route::resources([
            'province'      =>   ProvinceController::class,
            'branch'        =>   BranchController::class,
            'room'          =>   RoomController::class,
            'service'       =>   ServiceController::class,
            'blog'          =>   BlogController::class,
            'user'          =>   UserController::class,
            'ticket'        =>   TicketController::class,
            'coupon'        =>   CouponController::class,
            'payment'       =>   PaymentController::class,
            'review'        =>   ReviewController::class,
            'role'          =>   RoleController::class,
            'permission'    =>   PermissionController::class,
            
        ]);
});


    



