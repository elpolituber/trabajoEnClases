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


    //Usuarios
        $router->post('/login', ['uses' =>'UserController@validarUsuario']);
        $router->post('/users', ['uses' => 'UserController@post']);
        $router->post('/users_g', ['uses' => 'UserController@get']);
        $router->delete('/users', ['uses' => 'UserController@eliminarUsuario']);
        
    //publicaciones
        $router->post('/publicationsM',['uses' =>'PublicacionController@mostrarPublicacion']);
        $router->post('/publications', ['uses' =>'PublicacionController@crearPublicacion']);
        $router->put('/publications', ['uses' => 'PublicacionController@editarPublicacion']);
        $router->delete('/publications',['uses' => 'PublicacionController@eliminarPublicacion']);
    
