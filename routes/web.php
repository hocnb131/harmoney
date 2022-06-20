<?php

use App\Http\Controllers\BranchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProvinceController;

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

Auth::routes();
Route::prefix('home')->group(function(){
        Route::get('/',[HomeController::class,'index'])->name('home');
        // Route::get('province',  'province')->name('province');
        Route::resources([
            'province' => ProvinceController::class,
            'branch'   => BranchController::class,
        ]);
        
    
});
    



