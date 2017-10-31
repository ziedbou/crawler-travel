<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
   protected $fillable = [
   		'name',
   		'url',
   		'prix',
   		'description',
   		'periode',
   		'date',
   		'promotion',
   		'produit_id',
   		'category_id',
   		
   ];

   public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
