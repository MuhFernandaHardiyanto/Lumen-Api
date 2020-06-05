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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//Generate Application key
$router->get('/key', function(){
    return str_random(32);
});

//Membuat Url get dengan "/tesip"
$router->get('/tesip', function(){
    return 'Hello world! - GET';
});

//Membuat Url Post
$router->post('/bar', function(){
    return 'Hello World - POST';
});

//The Route allows you to Register routes that respond to any HTTP verb:

//Membuat Url GET
$router->get('/get', function(){
    return 'GET';
});

//Membuat Url POST
$router->post('/post', function(){
    return 'POST';
});

//Membuat Url PUT
$router->put('/put', function(){
    return 'PUT';
});

//Membuat Url PATCH
$router->patch('/patch', function(){
    return 'PATCH';
});

//Membuat Url DELETE
$router->delete('/delete', function(){
    return 'DELETE';
});

//Membuat Url OPTIONS
$router->options('/options', function(){
    return 'OPTIONS';
});