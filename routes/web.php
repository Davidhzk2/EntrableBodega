<?php


use App\App\Productos\Controllers\ProductosController;
use App\App\Empleados\Controllers\EmpleadosController;
use Illuminate\Support\Facades\Route;

Route::resource('/productos', ProductosController::class); //lista productos

Route::get('/crear', function(){
    return view("productos.crear");
});


Route::resource('/empleados', EmpleadosController::class); //

Route::get('/empleados/crear', function(){
    return view("empleados.crear");
});
// Route::get('/', function () {
//     return view('welcome');
// });

