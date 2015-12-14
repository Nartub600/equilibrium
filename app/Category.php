<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'categories';

    protected $fillable = ['name', 'parent', 'order'];

    public function products()
    {
        // return $this->belongsToMany('App\Product', 'category_product', 'category_id', 'product_id');
        return $this->hasMany('App\Product', 'category_id');
    }

    public function parent() {
        if ($this->parent != 0) {
            return Category::find($this->parent);
        } else {
            return new Category();
        }
    }

    public function children() {
        $children = Category::where('parent', $this->id)->orderBy('order', 'asc')->get();

        if (count($children) > 0)
        {
            // foreach($children as $child) {
            //     $grandChildren = $child->children();
            //     if(count($grandChildren) > 0) $child->children = $grandChildren;
            // }

            return $children;
        }
        else
        {
            return null;
        }
    }

}
