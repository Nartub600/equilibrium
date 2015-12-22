<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ProductController extends Controller
{

    protected function buildOptionTree(Category $category, Product $product = null, $level = 0) {
        $string = '';
        for ($i = 0; $i < $level; $i++)
        {
            $string .= '&mdash; ';
        }

        $selected = '';
        if ($product)
        {
            $product_categories = $product->categories()->get();
            foreach ($product_categories as $product_category) {
                if ($product_category->id == $category->id) {
                    $selected = ' selected';
                    break;
                }
            }
        }
        $html = '<option value="' . $category->id . '"' . $selected . '>' . $string . $category->name . '</option>';

        $children = $category->children();
        if(count($children) > 0)
        {
            $level++;
            foreach ($children as $child)
            {
                $html .= $this->buildOptionTree($child, $product, $level);
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

            $product->nombre = $input['nombre'];
            $product->barcode = $input['barcode'];
            $product->marca = $input['marca'];
            $product->fuente = $input['fuente'];
            $product->denominacion_legal = $input['denominacion_legal'];
            $product->alimento = $input['alimento'];
            $product->gramos = $input['gramos'];
            $product->calorias = $input['calorias'];
            $product->calorias_porcentaje = $input['calorias_porcentaje'];
            $product->hidratos = $input['hidratos'];
            $product->azucares = $input['azucares'];
            $product->sacarosa = $input['sacarosa'];
            $product->polidextro = $input['polidextro'];
            $product->almidon = $input['almidon'];
            $product->polialcoholes = $input['polialcoholes'];
            $product->fibra = $input['fibra'];
            $product->proteinas = $input['proteinas'];
            $product->grasas = $input['grasas'];
            $product->ags = $input['ags'];
            $product->agmi = $input['agmi'];
            $product->agpi = $input['agpi'];
            $product->trans = $input['trans'];
            $product->colesterol = $input['colesterol'];
            $product->epa = $input['epa'];
            $product->dha = $input['dha'];
            $product->omega_3 = $input['omega_3'];
            $product->omega_6 = $input['omega_6'];
            $product->omega_9 = $input['omega_9'];
            $product->sodio = $input['sodio'];
            $product->calcio = $input['calcio'];
            $product->hierro = $input['hierro'];
            $product->fosforo = $input['fosforo'];
            $product->potasio = $input['potasio'];
            $product->magnesio = $input['magnesio'];
            $product->selenio = $input['selenio'];
            $product->zinc = $input['zinc'];
            $product->vit_a_mc = $input['vit_a_mc'];
            $product->vit_a_ui = $input['vit_a_ui'];
            $product->vit_e_mc = $input['vit_e_mc'];
            $product->vit_e_ui = $input['vit_e_ui'];
            $product->vit_d = $input['vit_d'];
            $product->b1 = $input['b1'];
            $product->b2 = $input['b2'];
            $product->niacina = $input['niacina'];
            $product->b6 = $input['b6'];
            $product->b9 = $input['b9'];
            $product->b12 = $input['b12'];
            $product->vit_c = $input['vit_c'];
            $product->indice_glucemico = $input['indice_glucemico'];
            $product->alcohol = $input['alcohol'];
            $product->calorias_alcohol = $input['calorias_alcohol'];
            $product->descripcion = $input['descripcion'];
            $product->ingredientes = $input['ingredientes'];
            $product->nombre_cientifico = $input['nombre_cientifico'];
            $product->tags = $input['tags'];
            $product->otros_nombres = $input['otros_nombres'];
            $product->rnpa = $input['rnpa'];
            $product->rne = $input['rne'];
            $product->equivalencia = $input['equivalencia'];
            $product->user_id = session('user')->id;

            $product->save();

            $product->categories()->attach($input['categories']);

            $filename = $product->id . '.' . $request->file('foto')->getClientOriginalExtension();

            \Storage::put(
                'products/' . $filename,
                file_get_contents($request->file('foto')->getRealPath())
            );

            $product->foto = $filename;

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

    public function show($id) {

    }

    public function edit($id) {
        $product = Product::find($id);

        $fathers = Category::where('parent', 0)->orderBy('order', 'asc')->get();

        $html = '';
        foreach ($fathers as $father) {
            $html .= $this->buildOptionTree($father, $product);
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

            $product->nombre = $input['nombre'];
            // $product->foto = $input['foto'];
            $product->barcode = $input['barcode'];
            $product->marca = $input['marca'];
            $product->fuente = $input['fuente'];
            $product->denominacion_legal = $input['denominacion_legal'];
            $product->alimento = $input['alimento'];
            $product->gramos = $input['gramos'];
            $product->calorias = $input['calorias'];
            $product->calorias_porcentaje = $input['calorias_porcentaje'];
            $product->hidratos = $input['hidratos'];
            $product->azucares = $input['azucares'];
            $product->sacarosa = $input['sacarosa'];
            $product->polidextro = $input['polidextro'];
            $product->almidon = $input['almidon'];
            $product->polialcoholes = $input['polialcoholes'];
            $product->fibra = $input['fibra'];
            $product->proteinas = $input['proteinas'];
            $product->grasas = $input['grasas'];
            $product->ags = $input['ags'];
            $product->agmi = $input['agmi'];
            $product->agpi = $input['agpi'];
            $product->trans = $input['trans'];
            $product->colesterol = $input['colesterol'];
            $product->epa = $input['epa'];
            $product->dha = $input['dha'];
            $product->omega_3 = $input['omega_3'];
            $product->omega_6 = $input['omega_6'];
            $product->omega_9 = $input['omega_9'];
            $product->sodio = $input['sodio'];
            $product->calcio = $input['calcio'];
            $product->hierro = $input['hierro'];
            $product->fosforo = $input['fosforo'];
            $product->potasio = $input['potasio'];
            $product->magnesio = $input['magnesio'];
            $product->selenio = $input['selenio'];
            $product->zinc = $input['zinc'];
            $product->vit_a_mc = $input['vit_a_mc'];
            $product->vit_a_ui = $input['vit_a_ui'];
            $product->vit_e_mc = $input['vit_e_mc'];
            $product->vit_e_ui = $input['vit_e_ui'];
            $product->vit_d = $input['vit_d'];
            $product->b1 = $input['b1'];
            $product->b2 = $input['b2'];
            $product->niacina = $input['niacina'];
            $product->b6 = $input['b6'];
            $product->b9 = $input['b9'];
            $product->b12 = $input['b12'];
            $product->vit_c = $input['vit_c'];
            $product->indice_glucemico = $input['indice_glucemico'];
            $product->alcohol = $input['alcohol'];
            $product->calorias_alcohol = $input['calorias_alcohol'];
            $product->descripcion = $input['descripcion'];
            $product->ingredientes = $input['ingredientes'];
            $product->nombre_cientifico = $input['nombre_cientifico'];
            $product->tags = $input['tags'];
            $product->otros_nombres = $input['otros_nombres'];
            $product->rnpa = $input['rnpa'];
            $product->rne = $input['rne'];
            $product->equivalencia = $input['equivalencia'];

            $product->save();

            // $product->categories()->detach();
            $product->categories()->sync($input['categories']);

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
        Product::destroy($id);

        return redirect('product/index');
    }

}
