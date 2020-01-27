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

Auth::routes();


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return view('landing');
});

Route::get('/showallproperties','propertiesController@showProperties');

Route::get('/showcoupons','CouponsController@showallcoupons');

Route::get('/fetchcoupondetails','CouponsController@showdetails');




//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/CouponCreate/submit1', 'AppController@submit1');

//Route::post('/couponvalidate', 'AppController@Compare');

//Route::post('/showdetails', 'AppController@showdetails');

Route::get('/couponvalidate/result', 'AppController@compare');
