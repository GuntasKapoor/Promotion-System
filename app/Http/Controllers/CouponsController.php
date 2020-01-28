<?php

namespace App\Http\Controllers;

use App\coupons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\couponProperty;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\DocBlock\Tags\Property;

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

    public function showSelectedProperties(Request $request)
    {
        $showSelectedProperties = couponProperty::where('c_id', $request->input('c_id'))->get();

        return $showSelectedProperties;
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
        DB::delete('delete from coupon_properties where c_id = ?',[$request->input('c_id')]);

        $p=$request->input('c_property');
        $data=array();
        foreach($p as $pp){
            if(!empty($pp)){
                $data[]=[
                    'c_id'=>$request->input('c_id'),
                    'p_id'=>$pp,
                ];
            }
        }
        couponProperty::insert($data);


        return redirect('/showcoupons');
    }



}
