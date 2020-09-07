<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    //

    protected $fillable = [
        'name_s','name_cs','lit_number', 
   ];



   function users(){
       return $this->hasMany('App\User');
   }
   
}
