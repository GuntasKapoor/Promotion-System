<?php

namespace App\Http\Controllers;

use App\coupons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouponsController extends Controller{

    public function showallcoupons(){
        $showcoupons = coupons::all()->toArray();

        return $showcoupons;
    }
    public function showallcoupon(){
        return view('landing');
    }
    public function del(){
        
        return view('landing');
    }

    public function showdetails(Request $request){

        $showthiscoupon = coupons::where('c_id', $request->input('c_id'))->first();

        return $showthiscoupon;
    }

    public function destroy($id)
    {
        $coupon = coupons::where('c_id', $id)->delete();
//
//        $coupon->each->delete();
//        return redirect('/DeleteCoupon');
    }

    public function index()
    {
        $showcoupons = coupons::all()->toArray();

        return $showcoupons;
    }
}
