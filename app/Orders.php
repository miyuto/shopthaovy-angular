<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function  orderproducts()
    {
        return $this->hasMany('App\OrderProducts','orders_id','id');
    }
    public function customers()
    {
        return $this->belongsTo('App\Customers','customers_id','id');
    }
}
