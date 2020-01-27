<?php

namespace App\Http\Controllers;

use App\Properties;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PropertiesController extends Controller{

    public function showProperties(){

        $allProperties = \App\Properties::where('p_id',1)->first()->toArray();
        //where('p_id',1)->first();
       // Properties::query(w);

        return view('propertiesView')->withpropertiesDetails($allProperties);
    }
}
