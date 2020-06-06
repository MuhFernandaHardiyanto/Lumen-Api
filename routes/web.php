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
// $router->get('/key', function(){
//     return str_random(32);
// });

//Membuat Url get dengan "/tesip"
$router->get('/tesip', function(){
    return 'Hello world! - GET';
});

//Membuat Url Post
$router->post('/bar', function(){
    return 'Hello World - POST';
});

//=====================================================================
//The Route allows you to Register routes that respond to any HTTP verb:
//=====================================================================

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

//=====================================================================
//Mencoba Route dengan memanggil ID atau data tertertu 
//=====================================================================

//(BASIC ROUTE PARAMETER)
// $router->get('/user/{id}', function($id){
//     return 'User id = ' . $id;
// });

//Memanggil 2 route post dan comments (BASIC ROUTE PARAMETER)
// $router->get('/post/{postID}/comments/{commendID}', function($postID, $komenID){
//     return 'Post ID = ' . $postID . ' Comments ID = ' . $komenID;
// });

//Mencoba Route URL OPSIONAL (boleh tidak diisi/ data di kosongkan) (OPTIONAL ROUTE PARAMETER)
$router->get('/opsional[/{pram}]', function($pram = null){
    return $pram;
});

//=====================================================================
//Membuat Alias Route
//=====================================================================

$router->get('profile', function(){
    return redirect()->route('route.profile');
});

$router->get('profile/route', ['as' => 'route.profile', function(){
    return 'Profile Route';
}]);

// $router->get('profile', ['as' => 'route.profile', function(){
//     return route('route.profile');
// }]);

// $router->get('profile/idakun', ['as' => 'route.profile', function(){
//     return route('route.profile');
// }]);

//=====================================================================
//Membuat Method Grub
//=====================================================================
// Lokasi middleware = App/Http/middleware

// $router->group(['prefix' => 'admin'], function () use ($router) {
//     $router->get('home', function (){
//         return 'Home Admin';
//     });

$router->group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => ''], function () use ($router) {
    $router->get('home', function (){
        return 'Home Admin';
    });

    $router->get('profile', function (){
        return 'Profile Admin';
    });
});

//=====================================================================
//Membuat Middleware
//Middleware adalah memisahkan layanan , dan di gunakan sesuai dengan user penggunanya
//=====================================================================

// $router->get('/adm/beranda', ['middleware' => 'age' , function (){
//     return 'Old Enogh';
// }]);

// $router->get('/fail', function (){
//     return 'Note yet mature';
// });

//=====================================================================
//Menggunakan Kontroler pada router
//=====================================================================

$router->get('/key', 'Cobakontroler@generateKey');

$router->post('/foo', 'Cobakontroler@fooExample');

//=====================================================================
//Menggunakan Parameter dalam Kontroler pada router
//=====================================================================

$router->get('/user/{id}', 'Cobakontroler@getUser');

$router->get('/post/cat1/{cat1}/cat2/{cat2}', 'Cobakontroler@getPost');

//=====================================================================
//Menggunakan Named/Alias Rroute dalam Kontroler
//=====================================================================

$router->get('/alias', ['as' => 'profile' , 'uses' => 'Cobakontroler@getAlias']);

$router->get('/alias/action' , ['as' => 'alias.action' , 'uses' => 'Cobakontroler@getAliasAction']);

//=====================================================================
//Implementasi Middleware pada Kontroler
//=====================================================================

$router->get('/adm/beranda', ['middleware' => 'age' , function (){
    return 'Old Enogh';
}]);

$router->get('/fail', function (){
    return 'Note yet mature';
});
