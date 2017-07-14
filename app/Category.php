<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
    	'category_name',
    ];

/*ACCESSORS...retrieving
*CategoryName = category_name row in DB, value can be anything
*/
     public function getCategoryNameAttribute($value)
    {
        return strtoupper($value);
    }

 /*MUTATORS..storing
*CategoryName = category_name row in DB, value can be anything
 */  

 public function setCategoryNameAttribute($value)
    {
    	return $this->attributes['category_name'] = strtolower($value);
    }

    public function articles()
    {
    	return $this->hasMany('App\Article');
    }
}
