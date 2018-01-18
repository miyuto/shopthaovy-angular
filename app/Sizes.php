<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sizes extends Model
{
    protected $table = "sizes";
    public $timestamps = false;
    public function products()
    {
        return $this->belongsToMany('App\Products');
    }
}
