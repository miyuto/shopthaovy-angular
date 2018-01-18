<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = "customers";
    public $timestamps = false;

    public function orders()
    {
        return $this->hasMany('App\Orders','customers_id','id');
    }
}
