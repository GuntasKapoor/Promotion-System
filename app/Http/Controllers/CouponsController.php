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
    public function editCouponDetail(Request $request){
        return view('landing');
    }
    public function showdetail(Request $request){

        return view('landing');
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

    public function editCouponDetails(Request $request)
    {


        $coupon = DB::table('coupons')->where('c_id', $request->input('c_id'));

        $coupon->update([
            'c_name' => $request->input('c_name'),
            'c_percentDiscount' => $request->input('c_percentDiscount'),
            'c_validity' => $request->input('c_validity'),
            'c_maxDiscount' => $request->input('c_maxDiscount'),
            'c_activate' => $request->input('c_activate')
        ]);


        return redirect('/showcoupons');
    }



}
