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

    }

    public function create() {

    }

    public function store(Request $request) {

    }

    public function show($id) {

    }

    public function edit($id) {

    }

    public function update($id, Request $request) {

    }

    public function destroy($id) {

    }

}
