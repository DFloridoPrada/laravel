<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/secreto', function () {
    return view('secreto', ['name' => 'David']);
});

Route::get('/post', function () {
    return 'Bienvenido a mis posts';
});

// Utilizar parámetros en las peticiones
// Route::get('/post/{id}', function ($id) {
//     return 'Bienvenido al post ' . $id;
// });

Route::get('/post/{id}/{action?}', function ($id, $action = null) {
    return 'Bienvenido al post ' . $id . ' que va a realizar la acción ' . $action;
});