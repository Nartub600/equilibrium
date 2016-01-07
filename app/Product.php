<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'products';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $with = ['equivalences', 'user'];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function categories() {
        return $this->belongsToMany('App\Category', 'category_product', 'product_id', 'category_id');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag', 'product_tag', 'product_id', 'tag_id');
    }

    public function equivalences() {
        return $this->hasMany('App\Equivalence', 'product_id');
    }

    public function getFotoAttribute($value) {
        return 'data:image/' . explode('.', $value)[1] . ';base64,' . base64_encode(\Storage::get('products/' . $value));
    }

}
