<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";
    public $timestamps = false;

    protected $guarded = array('id');
    public function categories()
    {
        return $this->belongsTo('App\Categories','categories_id','id');
    }
    public function colors()
    {
        return $this->belongsToMany('App\Colors');
    }
    public function sizes()
    {
        return $this->belongsToMany('App\Sizes');
    }
    public function orderproducts()
    {
        return $this->hasMany('App\OrderProducts','product_id','id');
    }
    public function photos()
    {
        return $this->hasMany('App\Photos','products_id','id');
    }
}
