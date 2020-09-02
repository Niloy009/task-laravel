<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['fname', 'lname', 'email', 'user_id', 'phone', 'message','total_price'];


    public function services(){
        return $this->belongsToMany('App\Service');
    }
}
