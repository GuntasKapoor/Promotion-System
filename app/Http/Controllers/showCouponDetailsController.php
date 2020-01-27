<?php

namespace App\Http\Controllers;

use App\coupons;
use Illuminate\Http\Request;



class ShowCouponDetailsController extends Controller{

    public function showdetails(Request $request){

        $showthiscoupon = coupons::where('c_id', $request->input('c_id'))->first();

        return $showthiscoupon;
    }
}
