<?php

namespace App\Http\Controllers;

use App\coupons;
use Illuminate\Http\Request;

class CouponsController extends Controller{

    public function showallcoupons(){

        $showcoupons = coupons::all()->toArray();

        return json_encode($showcoupons);
    }

    public function showdetails(Request $request){

        $showthiscoupon = coupons::where('c_id', $request->input('c_id'))->first();

        return $showthiscoupon;
    }
}
