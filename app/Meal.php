<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable =[

        'name','description','photo','quantityInStock','buyPrice','salePrice','tauxTVA','restaurant_id'
    ];
}
