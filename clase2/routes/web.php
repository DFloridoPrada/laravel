<?php

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ruta get simple
// Route::get('/hello', function () {
//     return view('hello-world');
// });

// Get con controlador
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/article/{id}', [HomeController::class, 'show']);
Route::get('/mostrar_usuario/{nombre}', [HomeController::class, 'mostrarUsuario']);

// // Ruta get con un parámetro
// Route::get('/info/{id}', function ($id) {
//     return 'Get info of the item with id: ' . $id;
// });

// Ruta get con un parámetro y valor por defecto
Route::get('/copy/{id?}', function ($id=null) {
    if ($id) {
        return 'You copied the item with id: ' . $id;
    }
    else {
        return 'You cannot copy and item without id';
    }
});

Route::get('/info/{id}', function ($id) {
    return view('show.products', ['id' => $id]);
});

// Ruta post simple
Route::post('/people', function () {
    return 'Person sent by post';
});

Route::get('/tasks', [TaskController::class, 'index']);