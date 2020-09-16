<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable= [
        'title',
        'description',
        'icon',
    ];

    public function reviews()
    {
        return $this->hasMany('App\Review', 'product_id', 'id');
    }

    public function like_products()
    {
        return $this->hasMany('App\LikeProduct', 'product_id', 'id');
    }
}
