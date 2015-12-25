<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

use Illuminate\Http\Request;

use App\Category;
use App\Product;

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
        if ($request->has('id')) {
            $product = Product::with('equivalences')->find($request['id']);

            return response()->json([
                'product' => $product
            ]);
        } else {
            $products = Product::with('equivalences')->where($request->all())->get();

            return response()->json([
                'products' => $products
            ]);
        }

    }

}
