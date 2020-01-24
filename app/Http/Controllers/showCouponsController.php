<?php

namespace App\Http\Controllers;

use App\coupons;
use App\Properties;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ShowCouponsController extends Controller{

    public function showallcoupons(){

        $showcoupons = coupons::all()->toArray();
        // Properties::query(w);


        return json_encode($showcoupons);
    }
}
