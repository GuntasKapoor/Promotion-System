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


