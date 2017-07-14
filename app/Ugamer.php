<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ugamer extends Model
{
    protected $table = 'ugamers';
    
    protected $fillable = [
    	'name',
    	'nickname',
    	'email',
    ];

/*Mutators: to format my input fieldd*/
    public function setNameAttribute($data)
    {
       $this->attributes['name'] = strtolower($data);
    }

/*Mutators: to format my input fieldd*/
    public function setNickNameAttribute($data)
    {
       $this->attributes['nickname'] = strtolower($data);
    }

/*Mutators: to format my input fieldd*/
    public function setEmailAttribute($data)
    {
       $this->attributes['email'] = strtolower($data);
    }

}
