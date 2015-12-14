<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'products';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    // public function categories()
    // {
    //     return $this->belongsToMany('App\Category', 'category_product', 'product_id', 'category_id');
    // }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'product_tag', 'product_id', 'tag_id');
    }

}
