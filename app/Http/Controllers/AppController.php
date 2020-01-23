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

class AppController extends Controller
{
    public function CouponCreate(){
        //$data=$request->input();
        return view('CouponCreate');
    }

    public function compare(){
        //$data=$request->input();
//        return view('CouponCreate');

//        $model = properties::where('p_id',1)->get();
//        print_r($model);
//        $cc=$r->input('c');
//        $pp=$r->input('p');
//        $uu=$r->input('u');
        $coupon=coupons::where('c_id',5)->count();
        if(!$coupon){
            $response = ['valid' => false, 'message' => 'Coupon code not recognised'];
        }
        else{
            $coupon=coupons::where('c_id',5)
                ->where('c_validity','>=',Carbon::now())
                ->where('c_activate',1)->count();
            if(!$coupon){
                $response = ['valid' => false, 'message' => 'Coupon code has expired'];
            }
            else{
                $zz=couponProperty::where('c_id',5)
                    ->where('p_id',1)->count();
                if(!$zz){
                    $response = ['valid' => false, 'message' => 'Coupon not applicable on this property'];
                }
                else{
                    $zz=couponuser::where('c_id',5)
                        ->where('u_id',6)->count();
                    if($zz){
                        $response = ['valid' => false, 'message' => 'You have already used this coupon'];
                    }
                    else{
                        $response = ['valid' => true, 'message' => 'Coupon applied successfully!.'];
                        $id = DB::table('couponusers')->insertGetId(
                            ['c_id' => 5, 'u_id' => 6]
                        );
                    }


                }
            }
        }


//        $coupon = coupons::where('c_id',5)
//            ->where('c_validity','>=',Carbon::now())
//            ->where('c_activate',1)->count();
//        if (!$coupon) {
//            $response = ['valid' => false, 'message' => 'Coupon code not recognised'];
//        }  else {
//            $zz=couponProperty::where('c_id',5)
//                    ->where('p_id',99)->count();
//            if(!$zz){
//                $response = ['valid' => false, 'message' => 'Coupon not applicable on this property'];
//            }
//            else{
//                $response = ['valid' => true, 'message' => 'Coupon applied successfully!.'];
//            }
//        }
//        print_r($response);
        return json_encode($response);
//
//        print_r($coupon);

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
