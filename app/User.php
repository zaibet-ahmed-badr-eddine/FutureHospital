<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'name','pseudoname','email', 'password','bornplace','birthday','phonenumber','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function role(){
        return $this->belongsTo('App\Role');
    }

    function service(){
        return $this->belongsTo('App\Service');
    }

    public function getAvatar(){
        if ($this->avatar == null){
            return "/img/img_24787.png";
        }
        return '/storage/'.$this->avatar;
    }
}
