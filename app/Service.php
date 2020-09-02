<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'price'];

    public function carts(){
        return $this->belongsToMany('App\Cart');
    }
}
