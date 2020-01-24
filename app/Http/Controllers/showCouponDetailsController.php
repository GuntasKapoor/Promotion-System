<?php

namespace App\Http\Controllers;

use App\coupons;
use App\Properties;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ShowCouponDetailsController extends Controller{

    public function showdetails(Request $request){

        $showthiscoupon = DB::select('select * from Coupons where c_id = $request->input("c_id") and c_name = $request=>input("c_name") ' );
        // Properties::query(w);


        if($showthiscoupon == null)
            echo 'null coupon';
//        else
//            print_r($showthiscoupon);
        //return view('couponDetailsView')->withshowDetails((array)$showthiscoupon);
        return json_encode($showthiscoupon);
    }
}
