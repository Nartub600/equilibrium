<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    protected function buildIndexTree(Category $category, $level = 0) {
        $string = '';
        for($i = 0; $i < $level; $i++)
        {
            $string .= '&mdash; ';
        }

        $hasChildren = count($category->children()) > 0 ? true : false;
        $deleteForm = '<a href="#" onclick="if(confirm(\'Seguro eliminar?\')) $(this).siblings(\'form\').submit(); return false;">Eliminar</a>' . '<form method="post" action="' . url('category/destroy', $category->id) . '"><input type="hidden" name="_method" value="delete"><input type="hidden" name="_token" value="' . csrf_token() . '"></form>';

        $html =
        '<tr>' .
        '<td>' . $string . $category->name . '</td>' .
        '<td>' . ($category->foto ? '<img width="200" src="' . 'data:image/' . explode('.', $category->foto)[1] . ';base64,' . base64_encode(\Storage::get('categories/' . $category->foto)) . '" />' : '') . '</td>' .
        '<td>' .
        (session('user')->group == 1 ? '<a href="' . url('category/edit', $category->id) . '">Editar</a>' . ($hasChildren ? '' : ' | ' . $deleteForm) : '') .
        '</td>' .
        '</tr>';


        if($hasChildren)
        {
            $level++;
            foreach($category->children() as $child)
            {
                $html .= $this->buildIndexTree($child, $level);
            }
        }

        return $html;
    }

    protected function buildOptionTree(Category $category, Category $editable = null, $level = 0) {
        $string = '';
        for ($i = 0; $i < $level; $i++)
        {
            $string .= '&mdash; ';
        }

        $selected = '';
        if ($editable)
        {
            $selected = $editable->parent()->id == $category->id ? ' selected' : '';
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
        $fathers = Category::where('parent', 0)->orderBy('order', 'asc')->get();

        $html = '';
        foreach ($fathers as $father) {
            $html .= $this->buildIndexTree($father);
        }

        return view('category.index', [
            'html' => $html
        ]);
    }

    public function create() {
        $fathers = Category::where('parent', 0)->orderBy('order', 'asc')->get();

        $html = '';
        foreach ($fathers as $father) {
            $html .= $this->buildOptionTree($father);
        }

        return view('category.create', [
            'html' => $html
        ]);
    }

    public function store(Request $request) {
        $input = $request->all();

        $rules = [
            'name' => 'required'
        ];

        $messages = [
            'name.required' => 'El nombre de la categoría es obligatorio'
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->passes()) {
            $category = new Category();

            $category->name = $input['name'];
            $category->parent = $input['parent'];
            $category->order = $input['order'];

            $category->save();

            if ($request->hasFile('foto')) {
                $filename = $category->id . '.' . $request->file('foto')->getClientOriginalExtension();

                \Storage::put(
                    'categories/' . $filename,
                    file_get_contents($request->file('foto')->getRealPath())
                );

                $category->foto = $filename;

                $category->save();
            }

            return response()->json([
                'status' => 'ok',
                'url' => url('category/index')
            ]);
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
        $editable = Category::find($id);

        $fathers = Category::where('parent', 0)->orderBy('order', 'asc')->get();

        $html = '';
        foreach ($fathers as $father) {
            $html .= $this->buildOptionTree($father, $editable);
        }

        return view('category.edit', [
            'category' => $editable,
            'html'     => $html
        ]);
    }

    public function update($id, Request $request) {
        $input = $request->all();

        $rules = [
            'name' => 'required'
        ];

        $messages = [
            'name.required' => 'El nombre de la categoría es obligatorio'
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->passes()) {
            $category = Category::find($id);

            $category->name = $input['name'];
            $category->parent = $input['parent'];
            $category->order = $input['order'];

            $category->save();

            if ($request->hasFile('foto')) {
                $filename = $category->id . '.' . $request->file('foto')->getClientOriginalExtension();

                \Storage::put(
                    'categories/' . $filename,
                    file_get_contents($request->file('foto')->getRealPath())
                );

                $category->foto = $filename;

                $category->save();
            }

            return response()->json([
                'status' => 'ok',
                'url' => url('category/index')
            ]);
        } else {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->messages()->all()
            ]);
        }
    }

    public function destroy($id) {
        Category::destroy($id);

        return redirect('category/index');
    }

}
