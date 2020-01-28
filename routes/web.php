<?php

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

//Route::get('/', function () {
//    return view('landing');
//});

//Route::get('/api/showcoupondetail/{id}','ShowCouponDetailsController@showdetails');

//Route::get('/', function () {
//    return view('landing');
//});

Auth::routes();

Route::get('/', function () {
    return view('landing');
});
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/CouponCreate', 'AppController@CouponCreate');

//Route::get('/validate/result', 'AppController@Compare');

//Route::get('/showcoupons', 'AppController@showallcoupons');

Route::get('/validate', 'AppController@validateinput');

Route::get('/showallproperties','propertiesController@showProperties');

Route::get('/showcoupons','CouponsController@showallcoupon');
Route::get('/showallcoupons','CouponsController@showallcoupons');


//Route::get('/showcoupon','CouponsController@showallcoupons');

Route::get('/fetchcoupondetails','CouponsController@showdetails');
Route::get('/fetchSelectedProperties', 'CouponsController@showSelectedProperties');

Route::get('/showcoupondetails/{id}', 'CouponsController@showdetail');

Route::delete('/coupon/{c_id}', 'CouponsController@destroy');
Route::get('/editCouponDetails/{c_id}', 'CouponsController@editCouponDetail');
Route::get('/coupons', 'CouponsController@index');

Route::get('/DeleteCoupon', 'CouponsController@Del');

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/fetchcoupondetails/{c_id}','showCouponDetailsController@showdetails');
