<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    //
    protected $fillable = [
        'name','pseudoname','email', 'password','bornplace','birthday','gender','adress','phonenumber',
   ];
}
