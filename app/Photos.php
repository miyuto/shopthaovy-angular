<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    public function products()
    {
        return $this->belongsTo('App\Products','products_id','id');
    }
}
