<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
      'id',
      'name',
      'feature',
      'sale_place',
      'produce_org',
      'spec_and_price',
      'contact_tel',
      'img',
      'view_count',
      'user_id'
    ];
    protected $table = 'products';

  

    public function comments()
  {
      return $this->morphMany('App\Comment', 'commentable');
  }
}
