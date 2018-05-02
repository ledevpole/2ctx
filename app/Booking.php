<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [

        'bookedDate','numberCtx','customer_id','restaurant_id','comment'
    ];
}
