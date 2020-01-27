<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coupons extends Model
{
    protected $fillable = ['c_name',
        'c_percentDiscount',
        'c_validity',
        'c_maxDiscount',
        'c_activate'
    ];
    
}
