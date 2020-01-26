<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Coupon;
use App\Http\Resources\Coupon as CouponResource;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::paginate(5);

        return CouponResource::collection($coupons);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $c_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($c_id)
    {
        $coupon = Coupon::findOrFail($c_id);

        if($coupon->delete()) {
            return new CouponResource($coupon);
        }
    }
}
