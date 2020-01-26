<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/CouponCreate/submit1', 'AppController@submit1');

//Route::post('/couponvalidate', 'AppController@Compare');

Route::post('/showdetails', 'AppController@showdetails');

Route::post('/couponvalidate/result', 'AppController@compare');



Route::resource('/', 'samarth');
