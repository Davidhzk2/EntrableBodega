<?php


use App\App\Productos\Controllers\ProductosController;
use App\App\Empleados\Controllers\EmpleadosController;
use App\App\Clientes\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;

Route::resource('/productos', ProductosController::class); //lista productos
Route::get('/productos/{id}', [EmpleadoController::class, 'show'])->name('productos.detalles'); //listar por id
Route::get('/crear', function(){
    return view("productos.crear");
});


Route::resource('/empleados', EmpleadosController::class); //
Route::get('/empleados/{id}', [EmpleadoController::class, 'show'])->name('empleados.detalles'); //listar por id

Route::get('/crear-empleado', function(){
    return view("empleados.crear");
});


Route::resource('/clientes', ClientesController::class); //
Route::get('/crear-cliente', function(){
    return view("clientes.crear");
});
// Route::get('/', function () {
//     return view('welcome');
// });

