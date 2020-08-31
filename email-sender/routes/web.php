<?php

/*
 * |--------------------------------------------------------------------------
 * | Application Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register all of the routes for an application.
 * | It is a breeze. Simply tell Lumen the URIs it should respond to
 * | and give it the Closure to call when that URI is requested.
 * |
 */

/** @var \Laravel\Lumen\Routing\Router $router */
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/api/contato', 'ContactWebsiteController@store');
$router->get('/api/contato', 'ContactWebsiteController@send');

$router->group([
    'prefix' => 'api'
], function () use ($router) {
    
    $router->group([
        'prefix' => 'branco-adv'
    ], function () use ($router) {
        $router->post('forgot-password', 'BrancoAdvController@sendForgotPassword');
    });    
});

$router->group([
    'prefix' => 'v1',
    'middleware' => 'auth'
], function () use ($router) {
    $router->post('register', 'RegisterController@send');
    $router->post('forgot-password', 'ForgotPasswordController@send');
});
