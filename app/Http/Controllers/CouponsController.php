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

    public function updateCouponDetails(Request $request, $c_id)
    {
        //
        $request->validate([
//            'c_name' => 'required|text',
            'c_minPrice'=> 'required|numeric',
            'c_percentDiscount' => 'required|numeric'

        ]);
        $coupon = coupons::find($c_id);
        $coupon->c_name=$request->get('c_name');
        $coupon->c_minPrice=$request->get('c_minPrice');
        $coupon->c_percentDiscount=$request->get('c_percentDiscount');
        $coupon->c_validity=$request->get('c_validity');
        $coupon->c_maxDiscount=$request->get('c_maxDiscount');
        $coupon->c_cashbackType=$request->get('c_cashbackType');
        $coupon->c_paymentMethod=$request->get('c_paymentMethod');
        $coupon->save();

        return $coupon;
//        return redirect('forms');
    }
}
