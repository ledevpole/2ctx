<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [

        'bookedDate','numberCtx','user_id','restaurant_id','comment'
    ];
}
