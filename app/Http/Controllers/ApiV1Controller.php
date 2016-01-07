<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

use Illuminate\Http\Request;

use App\Category;
use App\Product;
use App\User;

class ApiV1Controller extends BaseController
{

    public function categoryIndex () {
        $categories = Category::all();

        return response()->json([
            'categories' => $categories
        ]);
    }

    public function categoryParents () {
        $parents = Category::where('parent', 0)->get();

        return response()->json([
            'parents' => $parents
        ]);
    }

    public function category ($id) {
        $category = Category::find($id);
        $products = $category->products()->with('equivalences')->get();

        return response()->json([
            'products' => $products
        ]);
    }

    public function products (Request $request) {
        if($request->has('after')) {
            $products = Product::where('updated_at', '>', $request['after'])
                ->paginate();
        } else {
            $products = Product::where($request->except('page'))
                ->paginate();
        }

        return $products;
    }

    public function productById ($id) {
        $product = Product::find($id);

        return response()->json([
            'product' => $product
        ]);
    }

    public function user ($id) {
        $user = User::find($id);

        return response()->json([
            'user' => $user
        ]);
    }

}
