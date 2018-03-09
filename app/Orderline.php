<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderline extends Model
{
    protected $fillable = [

        'quantityOrdered','meal_id','order_id','priceEach','taxRate','taxAmount'
    ];
}
