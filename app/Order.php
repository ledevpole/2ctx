<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [

        'user_id','completedDate','totalAmount','restaurant_id','tableNumber','comment'
    ];
}
