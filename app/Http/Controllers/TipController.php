<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Tip;
use Carbon\Carbon;

class TipController extends Controller
{

    public function index() {
        $tips = Tip::all();

        return view('tip.index', [
            'tips' => $tips
        ]);
    }

    public function create() {
        return view('tip.create');
    }

    public function store(Request $request) {
        $input = $request->all();

        $rules = [
            'content' => 'required',
            'start'   => 'required',
            'end'     => 'required'
        ];

        $messages = [
            'content.required' => 'El contenido del tip es obligatorio',
            'start.required'   => 'La fecha de inicio es obligatoria',
            'end.required'     => 'La fecha de finalización es obligatoria'
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->passes()) {
            $tip = new Tip();

            $tip->content = $input['content'];
            $tip->start = Carbon::createFromFormat('d/m/Y', $input['start']);
            $tip->end = Carbon::createFromFormat('d/m/Y', $input['end']);

            $tip->save();

            return response()->json([
                'status' => 'ok',
                'url' => url('tip/index')
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
        $tip = Tip::find($id);

        return view('tip.edit', [
            'tip' => $tip
        ]);
    }

    public function update($id, Request $request) {
        $input = $request->all();

        $rules = [
            'content' => 'required',
            'start'   => 'required',
            'end'     => 'required'
        ];

        $messages = [
            'content.required' => 'El contenido del tip es obligatorio',
            'start.required'   => 'La fecha de inicio es obligatoria',
            'end.required'     => 'La fecha de finalización es obligatoria'
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->passes()) {
            $tip = Tip::find($id);

            $tip->content = $input['content'];
            $tip->start = Carbon::createFromFormat('d/m/Y', $input['start']);
            $tip->end = Carbon::createFromFormat('d/m/Y', $input['end']);

            $tip->save();

            return response()->json([
                'status' => 'ok',
                'url' => url('tip/index')
            ]);
        } else {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->messages()->all()
            ]);
        }
    }

    public function destroy($id) {
        $tip = Tip::find($id);

        Tip::destroy($id);

        return redirect('tip/index');
    }

}
