<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = ['name', 'price', 'quantity', 'description', 
    					'image_one', 'image_two', 'image_three', 'default_image'];
    					
    public function categories()
    {
    	return $this->belongsToMany('App\Category');
    }
}
