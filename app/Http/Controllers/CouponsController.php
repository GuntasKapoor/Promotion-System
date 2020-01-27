<?php

namespace App\Http\Controllers;

use App\coupons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CouponsController extends Controller{

    public function showallcoupons(){

        $showcoupons = coupons::all()->toArray();

        return json_encode($showcoupons);
    }

    public function showdetails(Request $request){

        $showthiscoupon = coupons::where('c_id', $request->input('c_id'))->first();

        return $showthiscoupon;
    }

    public function editCouponDetails(Request $request)
    {


        $coupon = DB::table('coupons')->where('c_id', $request->input('c_id'));

        $coupon->update([
            'c_name' => $request->input('c_name'),
         'c_percentDiscount' => $request->input('c_percentDiscount'),
          'c_validity' => $request->input('c_validity'),
          'c_maxDiscount' => $request->input('c_maxDiscount')
        ]);


        return redirect('/api');
    }

}
