<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [

        'name','description','photo','adress','city','zipCode','country','phone','email','password'
    ];
}
