<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
    'title',
    'description',
    'slug',
    'cover',
    'category_id'
  ];

  // Creo la corrispondenza con category

  public function category()
  {
    return $this->belongsTo('App\Category');
  }
}
