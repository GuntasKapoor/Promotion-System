<?php

namespace App\Http\Controllers;

use App\coupons;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function CouponCreate(){
        //$data=$request->input();
        return view('CouponCreate');
    }

    public function submit1(Request $req){
        //$data=$request->input();
//        return view('home');
        $c=new coupons();
        print_r($req->input('c-name'));
        $c->c_name=$req->input('c-name');
        $c->c_percentDiscount=$req->input('c-percent');
        $c->c_validity=$req->input('c-validity');
        $c->c_maxDiscount=$req->input('c-maxdiscount');
        $c->c_activate=true;
        $c->save();
//        auth()->user()->coupons()->create([
//            'c-name'=>$req['c_name'],
//        'c-percent'=>$req['c_percentDiscount'],
//        'c-validity'=>$req['c_validity'],
//        'c-maxdiscount'=>$req['c_maxDiscount']
//        ]);
    }
}
