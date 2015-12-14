<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ProductController extends Controller
{

    protected function buildOptionTree(Category $category, Category $editable = null, $level = 0) {
        $string = '';
        for ($i = 0; $i < $level; $i++)
        {
            $string .= '&mdash; ';
        }

        $selected = '';
        if ($editable)
        {
            $selected = $editable->id == $category->id ? ' selected' : '';
        }
        $html = '<option value="' . $category->id . '"' . $selected . '>' . $string . $category->name . '</option>';

        if(count($category->children()) > 0)
        {
            $level++;
            foreach ($category->children() as $child)
            {
                $html .= $this->buildOptionTree($child, $editable, $level);
            }
        }

        return $html;
    }

    public function index() {
        $products = Product::all();

        return view('product.index', [
            'products' => $products
        ]);
    }

    public function create() {
        $fathers = Category::where('parent', 0)->orderBy('order', 'asc')->get();

        $html = '';
        foreach ($fathers as $father) {
            $html .= $this->buildOptionTree($father);
        }

        return view('product.create', [
            'html' => $html
        ]);
    }

    public function store(Request $request) {
        $input = $request->all();

        $rules = [
            'nombre' => 'required'
        ];

        $messages = [
            'nombre.required' => 'El nombre del producto es obligatorio'
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->passes()) {
            $product = new Product();

            $product->nombre      = $input['nombre'];
            $product->category_id = $input['category_id'];
            $product->barcode     = $input['barcode'];
            $product->marca       = $input['marca'];
            $product->fuente      = $input['fuente'];

            $product->save();

            // $product->categories()->attach($input['category_id']);

            return response()->json([
                'status' => 'ok',
                'url' => url('product/index')
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }

    public function show($id) {

    }

    public function edit($id) {
        $product = Product::find($id);

        $fathers = Category::where('parent', 0)->orderBy('order', 'asc')->get();

        $html = '';
        foreach ($fathers as $father) {
            $html .= $this->buildOptionTree($father, $product->category);
        }

        return view('product.edit', [
            'product' => $product,
            'html'    => $html
        ]);
    }

    public function update($id, Request $request) {
        $input = $request->all();

        $rules = [
            'nombre' => 'required'
        ];

        $messages = [
            'nombre.required' => 'El nombre del producto es obligatorio'
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->passes()) {
            $product = Product::find($id);

            $product->nombre      = $input['nombre'];
            $product->category_id = $input['category_id'];
            $product->barcode     = $input['barcode'];
            $product->marca       = $input['marca'];
            $product->fuente      = $input['fuente'];

            $product->save();

            return response()->json([
                'status' => 'ok',
                'url' => url('product/index')
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }

    public function destroy($id) {

    }

}
