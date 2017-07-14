<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    	'title',
    	'body',
        'slug',
        'category_id',
    ];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    /*Accessors*/
    public function getTitleAttribute($value)
    {
    	return ucwords($value);
    }

    /*Mutators*/
    public function setTitleAttribute($value)
    {
    	return $this->attributes['title'] = strtolower($value);
    }

    public function setBodyAttribute($value)
    {
    	return $this->attributes['body'] = strtolower($value);
    }
}
