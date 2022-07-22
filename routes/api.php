<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiProvinceController;
use App\Http\Controllers\Api\ApiBranchController;
use App\Http\Controllers\Api\ApiRoomController;
use App\Http\Controllers\Api\ApiPaymentController;
use App\Http\Controllers\Api\ApiTicketController;
use App\Http\Controllers\Api\ApiReviewController;
use App\Http\Controllers\Api\ApiBlogController;
use App\Http\Controllers\Api\ApiCouponController;
use App\Http\Controllers\Api\ApiServiceController;
use App\Http\Controllers\Api\ApiUserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResources([
    'province'  => ApiProvinceController::class,
    'branch'    => ApiBranchController::class,
    'room'      => ApiRoomController::class,
    'ticket'    => ApiPaymentController::class,
    'payment'   => ApiTicketController::class,
    'blog'      => ApiReviewController::class,
    'service'   => ApiBlogController::class,
    'review'    => ApiCouponController::class,
    'coupon'    => ApiServiceController::class,
    'user'      => ApiUserController::class,
]);

// Route::get('/customers', function(){
//     $faker = Faker\Factory::create();
//     $limit = 1000;
//     $customers = [];
//     for ($i = 0; $i < $limit; $i++) {
//         $customers[$i] = [
//             'Họ và tên'     => $faker->name,
//             'Email'         => $faker->unique()->email,
//             'Số điện thoại' => $faker->phoneNumber,
//             'Website'       => $faker->domainName,
//             'Tuổi'          => $faker->numberBetween(20,100),
//             'Địa chỉ'       => $faker->address
//         ];
//     }
//     return response()->json($customers);
// });



