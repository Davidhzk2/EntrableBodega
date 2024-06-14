<?php


use App\App\Productos\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

Route::resource('/productos', ProductosController::class); //lista productos
Route::get('/productos/{id}', ProductoController::class); //listar un prodcuto

Route::get('/crear', function(){
    return view("productos.crear");
});
// Route::get('/', function () {
//     return view('welcome');
// });

