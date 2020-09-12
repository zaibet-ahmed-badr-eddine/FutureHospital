<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    //

    protected $fillable = [
        'name_s','name_cs','lit_number','chef_id', 
   ];


   function users(){
       return $this->hasMany('App\User');
   }

//    function patient(){
//     return $this->hasMany('App\Patient');
//}

    function serviceChef(){
      if($this->id != null){
        $user=User::find($this->chef_id);
        return $user;
      }else{
          return ("no chef ");
      }
    }
}
