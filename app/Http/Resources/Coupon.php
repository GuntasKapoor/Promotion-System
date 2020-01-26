<?php

namespace App\Http\Resources;

header("Access-Control-Allow-Origin: *");

use Illuminate\Http\Resources\Json\JsonResource;

class Coupon extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
