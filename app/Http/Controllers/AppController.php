<?php

namespace App\Http\Controllers;
use App\couponProperty;
use App\coupons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function CouponCreate(){
        //$data=$request->input();
        return view('CouponCreate');
    }

    public function compare(){
        //$data=$request->input();
//        return view('CouponCreate');

        $model = coupons::where('c_id', 44)->first();
        print_r($model);

    }

    public function submit1(Request $req){
        //$data=$request->input();
//        return view('home');
//        $c=new coupons();
////        print_r($req->input());
////        print_r($req->input('c-name'));
//        $c->c_name=$req->input('c-name');
//        $c->c_percentDiscount=$req->input('c-percent');
//        $c->c_validity=$req->input('c-validity');
//        $c->c_maxDiscount=$req->input('c-maxdiscount');
//        $c->c_activate=true;
//        $c->save();

        $id = DB::table('coupons')->insertGetId(
            ['c_name' => $req->input('c-name'), 'c_percentDiscount' => $req->input('c-percent'),
                'c_validity' => $req->input('c-validity'), 'c_maxDiscount' => $req->input('c-maxdiscount'),
                'c_activate' => true]
        );
        print_r($id);
//        $books=$request->books;
//        $data = array();
//        foreach($books as $book)
//        {
//            if(!empty($book))
//            {
//                $data[] =[
//                    'name' => $book,
//                    'user_id' => Auth::id(),
//                ];
//
//            }}
//        Book::insert($data);
//        print_r($c);
//        $mm=$c->c_id;
//        print_r($mm);
//        $mm=DB::select('SELECT MAX(c_id) FROM coupons');
//        //$mm=$mm+1;
//        print_r($mm);
//        $xx=$mm[0][[MAX(c_id)] ];
//        print_r($xx);
        $mm = DB::getPdo()->lastInsertId();
        $p=$req->input('c_property');
//        print_r($req->input('c_property'));
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



//        return view('CouponCreate');
//        auth()->user()->coupons()->create([
//            'c-name'=>$req['c_name'],
//        'c-percent'=>$req['c_percentDiscount'],
//        'c-validity'=>$req['c_validity'],
//        'c-maxdiscount'=>$req['c_maxDiscount']
//        ]);
    }
}
