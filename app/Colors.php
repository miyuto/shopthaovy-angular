<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    protected  $table = "colors";
    public $timestamps = false;
    public function products()
    {
        return $this->belongsToMany('App\Products');
    }
}
