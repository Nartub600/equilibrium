<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Equivalence;
use Excel;

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

        if (session('view') == 'landscape') {
            $view = 'product.create-land';
        } else {
            session(['view' => 'portrait']);
            $view = 'product.create';
        }

        return view($view, [
            'html' => $html
        ]);
    }

    public function store(Request $request) {
        $input = $request->all();

        $rules = [
            'nombre'     => 'required',
            'foto'       => 'required',
            'categories' => 'required'
        ];

        $messages = [
            'nombre.required' => 'El nombre del producto es obligatorio',
            'foto.required' => 'La foto del producto es obligatoria',
            'categories.required' => 'Se debe elegir al menos una categoría'
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
            $product->unidad = $input['unidad'];
            $product->cantidad = $input['cantidad'];
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
            $product->user_id = session('user')->id;

            $product->save();

            foreach ($input['equivalence']['name'] as $key => $equivalence_name) {
                if ($equivalence_name) {
                    Equivalence::create([
                        'product_id' => $product->id,
                        'name'       => $equivalence_name,
                        'amount'     => $input['equivalence']['amount'][$key]
                    ]);
                }
            }

            $product->categories()->attach($input['categories']);

            if ($request->hasFile('foto')) {
                $filename = $product->id . '.' . $request->file('foto')->getClientOriginalExtension();

                \Storage::put(
                    'products/' . $filename,
                    file_get_contents($request->file('foto')->getRealPath())
                );

                $product->foto = $filename;

                $product->save();
            }

            if ($request->has('last')) {
                return response()->json([
                    'status' => 'ok',
                    'url'    => url('product/index')
                ]);
            } else {
                return response()->json([
                    'status' => 'ok',
                    'more'   => 'yes'
                ]);
            }

        } else {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->messages()->all()
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
            $product->barcode = $input['barcode'];
            $product->marca = $input['marca'];
            $product->fuente = $input['fuente'];
            $product->denominacion_legal = $input['denominacion_legal'];
            $product->alimento = $input['alimento'];
            $product->unidad = $input['unidad'];
            $product->cantidad = $input['cantidad'];
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

            $product->save();

            foreach ($input['equivalence']['name'] as $key => $equivalence_name) {
                if ($equivalence_name) {
                    Equivalence::create([
                        'product_id' => $product->id,
                        'name'       => $equivalence_name,
                        'amount'     => $input['equivalence']['amount'][$key]
                    ]);
                }
            }

            $product->categories()->sync($input['categories']);

            if ($request->hasFile('foto')) {
                $filename = $product->id . '.' . $request->file('foto')->getClientOriginalExtension();

                \Storage::put(
                    'products/' . $filename,
                    file_get_contents($request->file('foto')->getRealPath())
                );

                $product->foto = $filename;

                $product->save();
            }

            return response()->json([
                'status' => 'ok',
                'url' => url('product/index')
            ]);
        } else {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->messages()->all()
            ]);
        }
    }

    public function destroy($id) {
        $product = Product::find($id);

        $product->categories()->detach();

        foreach ($product->equivalences()->get() as $equivalence) {
            $equivalence->delete();
        }

        Product::destroy($id);

        return redirect('product/index');
    }

    public function duplicate($id) {
        $product = Product::find($id);

        $newProduct = $product->replicate();

        $newProduct->save();

        $categories = [];
        foreach ($product->categories()->get() as $category) {
            array_push($categories, $category->id);
        }

        $equivalences = $product->equivalences()->get();

        foreach ($equivalences as $key => $equivalence) {
                Equivalence::create([
                    'product_id' => $newProduct->id,
                    'name'       => $equivalence->name,
                    'amount'     => $equivalence->amount
                ]);
            }

        $newProduct->categories()->attach($categories);

        return redirect('product/index');
    }

    public function toggleView() {
        if (session('view') == 'portrait') {
            session(['view' => 'landscape']);
        } else if (session('view' == 'landscape')) {
            session(['view' => 'portrait']);
        } else {
            session(['view' => 'portrait']);
        }

        return redirect('product/create');
    }

    public function load() {
        return view('product.load');
    }

    public function doLoad(Request $request) {
        $input = $request->all();

        $rules = [
            'productList' => 'required'
        ];

        $messages = [
            'productList.required' => 'Es necesario seleccionar un archivo'
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->passes()) {
            Excel::load($request->file('productList'), function($reader) {
                $rows = $reader->get();

                foreach ($rows as $row) {
                    $product = new Product();

                    $product->nombre = !empty($row->nombre) ? $row->nombre : "";
                    $product->barcode = !empty($row->barcode) ? $row->barcode : "";
                    $product->marca = !empty($row->marca) ? $row->marca : "";
                    $product->fuente = !empty($row->fuente) ? $row->fuente : "";
                    $product->denominacion_legal = !empty($row->denominacion_legal) ? $row->denominacion_legal : "";
                    $product->alimento = !empty($row->alimento) ? $row->alimento : "";
                    $product->unidad = !empty($row->unidad) ? $row->unidad : "";
                    $product->cantidad = !empty($row->cantidad) ? $row->cantidad : "";
                    $product->calorias = !empty($row->calorias) ? $row->calorias : "";
                    $product->calorias_porcentaje = !empty($row->calorias_porcentaje) ? $row->calorias_porcentaje : "";
                    $product->hidratos = !empty($row->hidratos) ? $row->hidratos : "";
                    $product->azucares = !empty($row->azucares) ? $row->azucares : "";
                    $product->sacarosa = !empty($row->sacarosa) ? $row->sacarosa : "";
                    $product->polidextro = !empty($row->polidextro) ? $row->polidextro : "";
                    $product->almidon = !empty($row->almidon) ? $row->almidon : "";
                    $product->polialcoholes = !empty($row->polialcoholes) ? $row->polialcoholes : "";
                    $product->fibra = !empty($row->fibra) ? $row->fibra : "";
                    $product->proteinas = !empty($row->proteinas) ? $row->proteinas : "";
                    $product->grasas = !empty($row->grasas) ? $row->grasas : "";
                    $product->ags = !empty($row->ags) ? $row->ags : "";
                    $product->agmi = !empty($row->agmi) ? $row->agmi : "";
                    $product->agpi = !empty($row->agpi) ? $row->agpi : "";
                    $product->trans = !empty($row->trans) ? $row->trans : "";
                    $product->colesterol = !empty($row->colesterol) ? $row->colesterol : "";
                    $product->epa = !empty($row->epa) ? $row->epa : "";
                    $product->dha = !empty($row->dha) ? $row->dha : "";
                    $product->omega_3 = !empty($row->omega_3) ? $row->omega_3 : "";
                    $product->omega_6 = !empty($row->omega_6) ? $row->omega_6 : "";
                    $product->omega_9 = !empty($row->omega_9) ? $row->omega_9 : "";
                    $product->sodio = !empty($row->sodio) ? $row->sodio : "";
                    $product->calcio = !empty($row->calcio) ? $row->calcio : "";
                    $product->hierro = !empty($row->hierro) ? $row->hierro : "";
                    $product->fosforo = !empty($row->fosforo) ? $row->fosforo : "";
                    $product->potasio = !empty($row->potasio) ? $row->potasio : "";
                    $product->magnesio = !empty($row->magnesio) ? $row->magnesio : "";
                    $product->selenio = !empty($row->selenio) ? $row->selenio : "";
                    $product->zinc = !empty($row->zinc) ? $row->zinc : "";
                    $product->vit_a_mc = !empty($row->vit_a_mc) ? $row->vit_a_mc : "";
                    $product->vit_a_ui = !empty($row->vit_a_ui) ? $row->vit_a_ui : "";
                    $product->vit_e_mc = !empty($row->vit_e_mc) ? $row->vit_e_mc : "";
                    $product->vit_e_ui = !empty($row->vit_e_ui) ? $row->vit_e_ui : "";
                    $product->vit_d = !empty($row->vit_d) ? $row->vit_d : "";
                    $product->b1 = !empty($row->b1) ? $row->b1 : "";
                    $product->b2 = !empty($row->b2) ? $row->b2 : "";
                    $product->niacina = !empty($row->niacina) ? $row->niacina : "";
                    $product->b6 = !empty($row->b6) ? $row->b6 : "";
                    $product->b9 = !empty($row->b9) ? $row->b9 : "";
                    $product->b12 = !empty($row->b12) ? $row->b12 : "";
                    $product->vit_c = !empty($row->vit_c) ? $row->vit_c : "";
                    $product->indice_glucemico = !empty($row->indice_glucemico) ? $row->indice_glucemico : "";
                    $product->alcohol = !empty($row->alcohol) ? $row->alcohol : "";
                    $product->calorias_alcohol = !empty($row->calorias_alcohol) ? $row->calorias_alcohol : "";
                    $product->descripcion = !empty($row->descripcion) ? $row->descripcion : "";
                    $product->ingredientes = !empty($row->ingredientes) ? $row->ingredientes : "";
                    $product->nombre_cientifico = !empty($row->nombre_cientifico) ? $row->nombre_cientifico : "";
                    $product->tags = !empty($row->tags) ? $row->tags : "";
                    $product->otros_nombres = !empty($row->otros_nombres) ? $row->otros_nombres : "";
                    $product->rnpa = !empty($row->rnpa) ? $row->rnpa : "";
                    $product->rne = !empty($row->rne) ? $row->rne : "";
                    $product->user_id = session('user')->id;

                    $product->save();

                    $equivalences = !empty($row->equivalencias) ? array_map('trim', explode(',', $row->equivalencias)) : [];

                    foreach ($equivalences as $equivalence) {
                        $equivalence = explode(':', $equivalence);
                            Equivalence::create([
                                'product_id' => $product->id,
                                'name'       => $equivalence[0],
                                'amount'     => $equivalence[1]
                            ]);
                    }

                    $categories = array_map('trim', explode(',', $row->categorias));

                    $product->categories()->attach($categories);

                    if (!empty($row->foto)) {
                        $foto = file_get_contents($row->foto);
                        $filename = basename($row->foto);
                        $ext = explode('.', $filename)[1];

                        $filename = $product->id . '.' . $ext;

                        \Storage::put(
                            'products/' . $filename,
                            $foto
                        );

                        $product->foto = $filename;

                        $product->save();
                    } else {
                        $product->foto = "";
                    }
                }
            });

            return response()->json([
                'status' => 'ok',
                'url'    => url('product/index')
            ]);
        } else {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->messages()->all()
            ]);
        }
    }

}
