<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function getUsernameAttribute($value)
    {
        return ucwords($value);
    }

    /*RELATIONSHIPT BTW USER AMD ROLE*/
    public function roles()
    {
        return $this->belongsToMany('App\Role' ,'role_user');
    }


}
