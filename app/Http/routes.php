<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\User;
use App\Category;

$app->get('aux', function() {

});

$app->get('/', function() {
    return redirect('home');
});

$app->group([
    'middleware' => 'auth'
], function ($app) {

    $app->get('home', function() {
        return view('home');
    });

});

$app->group([

    'namespace' => 'App\Http\Controllers',
    'prefix'    => 'user'

], function ($app) {

    $app->get('login', ['uses' => 'UserController@getLogin']);
    $app->post('login', ['uses' => 'UserController@postLogin']);
    $app->get('logout', ['uses' => 'UserController@logout']);

});

$app->group([

    'namespace'  => 'App\Http\Controllers',
    'middleware' => 'auth',
    'prefix'     => 'category'

], function ($app) {

    $app->get('index', ['uses' => 'CategoryController@index']);
    $app->get('create', ['uses' => 'CategoryController@create']);
    $app->post('store', ['uses' => 'CategoryController@store']);
    $app->get('show/{id}', ['uses' => 'CategoryController@show']);
    $app->get('edit/{id}', ['uses' => 'CategoryController@edit']);
    $app->put('update/{id}', ['uses' => 'CategoryController@update']);
    $app->delete('destroy/{id}', ['uses' => 'CategoryController@destroy']);

});

$app->group([

    'namespace'  => 'App\Http\Controllers',
    'middleware' => 'auth',
    'prefix'     => 'product'

], function ($app) {

    $app->get('index', ['uses' => 'ProductController@index']);
    $app->get('create', ['uses' => 'ProductController@create']);
    $app->post('store', ['uses' => 'ProductController@store']);
    $app->get('show/{id}', ['uses' => 'ProductController@show']);
    $app->get('edit/{id}', ['uses' => 'ProductController@edit']);
    $app->put('update/{id}', ['uses' => 'ProductController@update']);
    $app->delete('destroy/{id}', ['uses' => 'ProductController@destroy']);

});

$app->group([

    'namespace' => 'App\Http\Controllers',
    'prefix'    => 'api'

], function ($app) {

    $app->get('products', ['uses' => 'ApiController@products']);

});

$app->group([
    'prefix' => 'admin'
], function ($app) {

    $app->get('/', function () {
        return view('adminlte.admin_template');
    });

});
