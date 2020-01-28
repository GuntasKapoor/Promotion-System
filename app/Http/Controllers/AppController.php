<?php

namespace App\Http\Controllers;
use App\couponProperty;
use App\coupons;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Properties;
use App\couponuser;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\DocBlock\Tags\Property;

class AppController extends Controller
{
    public function CouponCreate(){
        //$data=$request->input();
        return view('landing');
    }



    public function validateinput(){
        //$data=$request->input();
        return view('landing');
    }





    public function compare(Request $r) {

        $cc=$r->input('c');
        $pp=$r->input('p');
        $uu=$r->input('u');
        $response=[];
        if(!($cc&&$pp&&$uu)){
            return $response;
        }

        $pr=properties::where('p_id',$pp)->first();
//        $prop = DB::table('properties')->select('p_price')->where('p_id', $pp)->g();
//        $pr=properties::find($pp)->first();
//        $prop=$prop->p_price;
//        $prop->p_price;
        $prop=$pr->p_price;
        $coupon=coupons::where('c_id',$cc)->count();

        if(!$coupon){

            $response = ['valid' => false, 'message' => 'Coupon code not recognised', 'price'=>$prop];
        }
        else{

            $coupon=coupons::where('c_id',$cc)
                ->where('c_validity','>=',Carbon::now())
                ->where('c_activate',1)->count();
            if(!$coupon){
                $response = ['valid' => false, 'message' => 'Coupon code has expired', 'price'=>$prop];
            }
            else {
                $zz = couponProperty::where('c_id', $cc)
                    ->where('p_id', $pp)->count();
                if (!$zz) {
                    $response = ['valid' => false, 'message' => 'Coupon not applicable on this property', 'price'=>$prop];
                } else {
                    $zz = couponuser::where('c_id', $cc)
                        ->where('u_id', $uu)->count();
                    if ($zz) {
                        $response = ['valid' => false, 'message' => 'You have already used this coupon', 'price'=>$prop];
                    } else {
                        $response = ['valid' => true, 'message' => 'Coupon applied successfully!.', 'price'=>$prop];
                        $id = DB::table('couponusers')->insertGetId(
                            ['c_id' => $cc, 'u_id' => $uu]
                        );

                        $coupon=coupons::where('c_id',$cc)->first();
                        $prop=properties::where('p_id',$pp)->first();
                        //                        print_r($coupon);
                        $dis=(($coupon->c_percentDiscount)/100)*($prop->p_price);
                        if($dis>$coupon->c_maxDiscount){
                            $dis=$coupon->c_maxDiscount;
                        }
                        $pr=$prop->p_price-$dis;
                        $response = ['valid' => true, 'message' => 'Coupon applied successfully!.', 'price'=>$pr ];

                    }


                }
            }
        }
        return $response;

    }



    public function submit1(Request $req){

        $id = DB::table('coupons')->insertGetId(
        ['c_name' => $req->input('c-name'), 'c_percentDiscount' => $req->input('c-percent'),
        'c_validity' => $req->input('c-validity'), 'c_maxDiscount' => $req->input('c-maxdiscount'),
        'c_activate' => true]
        );

        $p=$req->input('c_property');
        print_r($req->input('c_property'));
        $data=array();
        foreach($p as $pp){
            if(!empty($pp)){
            $data[]=[
            'c_id'=>$id,
            'p_id'=>$pp,
            ];
            }
        }
        couponProperty::insert($data);
//        print_r('Coupon has been created');
//        Session::flash('Success','Coupon created successfully');
        return redirect('/CouponCreate');
    }

    public function update(Request $request,$id)
    {

    }








}
