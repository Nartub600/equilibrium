<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function getLogin() {
        return view('user.login');
    }

    public function postLogin(Request $request) {
        $user = User::where('username', $request['username'])->first();

        if ($user) {
            if (Hash::check($request['password'], $user->password)) {
                session(['auth' => true]);
                session(['user' => $user]);

                return response()->json([
                    'status' => 'ok',
                    'url'    => url('home')
                ]);
            } else {
                return response()->json([
                    'status' => 'error'
                ]);
            }
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }

    public function logout() {
        session()->flush();

        return redirect('user/login');
    }

    public function index() {
        if (session('user')->group != 1) return redirect('home');

        $users = User::all();

        return view('user.index', [
            'users' => $users
        ]);
    }

    public function create() {
        if (session('user')->group != 1) return redirect('home');

        return view('user.create');
    }

    public function store(Request $request) {
        $input = $request->all();

        $rules = [
            'username' => 'required',
            'password' => 'required|confirmed'
        ];

        $messages = [
            'username.required'  => 'El nombre de la categoría es obligatorio',
            'password.required'  => 'La contraseña es obligatoria',
            'password.confirmed' => 'La confirmación de la contraseña no es correcta'
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->passes()) {
            $user = new User();

            $user->username = $input['username'];
            $user->password = \Hash::make($input['password']);
            $user->group = 2; // 1: super, 2: normal

            $user->save();

            return response()->json([
                'status' => 'ok',
                'url' => url('user/index')
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
        if (session('user')->group != 1) return redirect('home');

        $user = User::find($id);

        return view('user.edit', [
            'user' => $user
        ]);
    }

    public function update($id, Request $request) {
        $input = $request->all();

        $rules = [
            'username' => 'required',
            // 'password' => 'required|confirmed',
        ];

        $messages = [
            'username.required'  => 'El nombre de usuario',
            // 'password.required'  => 'La contraseña es obligatoria',
            // 'password.confirmed' => 'La confirmación de la contraseña no es correcta'
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->passes()) {
            $user = User::find($id);

            $user->username = $input['username'];
            // $user->password = \Hash::make($input['password']);

            $user->save();

            return response()->json([
                'status' => 'ok',
                'url' => url('user/index')
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }

    public function destroy($id) {
        User::destroy($id);

        return redirect('user/index');
    }

}
