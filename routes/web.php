<?php

/** @var \Laravel\Lumen\Routing\Router $router */


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



$router->get('/', function () use ($router) {
    // return $router->app->version();
    return view('welcome');
});

$router->group(['prefix' => '/api/v1'], function () use ($router) {
    $router->get('/users', 'UserController@index');
    $router->get('/users/{key}', 'UserController@show');
    $router->post('/users', 'UserController@store');
    $router->delete('/users/{key}', 'UserController@delete');
    $router->put('/users', 'UserController@update');

    $router->post('/register', 'AuthController@register');
    $router->post('/login', 'AuthController@login');

    $router->get('/filterData', 'AuthController@filterData');
});
