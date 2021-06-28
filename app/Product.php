<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $fillable = [
      'name','category_id','price','quantity','status','image'
    ];

    public function category()
    {
        return $this -> belongsTo(Product::class );
    }
}
