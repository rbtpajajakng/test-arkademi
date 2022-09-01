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

$router->group(['prefix' => 'testapi/api'], function () use ($router) {
    $router->get('/', 'ProductController@getAllProducts');
    
    $router->get('/{id}', 'ProductController@getProductDetails');

    $router->post('/delete', function () use ($router) {
        return 'Delete a product';
    });

    $router->post('/create', function () use ($router) {
        return 'Create a product';
    });

    $router->post('/update', function () use ($router) {
        return 'Update a product';
    });

    $router->post('/login', function () use ($router) {
        return 'Make an existing user login';
    });

    $router->post('/register', function () use ($router) {
        return 'Register a new user';
    });
});

?>