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
        $products = Product::where('category_id', $id)->get();

        return response()->json([
            'products' => $products
        ]);
    }

    public function product (Request $request) {
        $products = Product::with('equivalences')->where($request->all())->get();

        return response()->json([
            'products' => $products
        ]);
    }

    public function productById ($id) {
        $product = Product::with('equivalences')->find($id);

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
