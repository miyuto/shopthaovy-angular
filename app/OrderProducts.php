<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProducts extends Model
{
    public function products()
    {
        return $this->belongsTo('App\Products','product_id','id');
    }
    public function  orders()
    {
        return $this->belongsTo('App\Orders','orders_id','id');
    }
}
