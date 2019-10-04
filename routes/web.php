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

$router->get('/', 'ShopController@index');
$router->get('/contact', function(){
    return view('contact.index');
});
$router->get('/shop/{id}', 'ShopController@productPage');
$router->post('/add_to_cart/{id}', 'ShopController@addToCart');
$router->get('/cart', '');

// localhost/api
$router->group(['prefix' => 'api'], function () use($router){

    //localhost/api/products
    $router->get('/products', 'ProductsController@get');
    $router->get('product/{id}', 'ProductsController@getById');
    $router->post('/product', 'ProductsController@create');
    $router->put('/product/{id}', 'ProductsController@update');
    $router->delete('/product/{id}', 'ProductsController@delete');
});