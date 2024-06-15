<?php

use App\App\Productos\Controllers\ProductosController;
use App\App\Empleados\Controllers\EmpleadosController;
use App\App\Clientes\Controllers\ClientesController;
use App\App\Inventarios\Controllers\InventariosController;
use App\App\Pedidos\Controllers\PedidosController;
use Illuminate\Support\Facades\Route;

Route::resource('/productos', ProductosController::class); //lista productos
Route::get('/productos/{id}', [ProductosController::class, 'show'])->name('productos.detalles'); //listar por id
Route::get('/crear', function(){
    return view("productos.crear");
});

Route::resource('/pedidos', PedidosController::class); //lista pedidos
Route::get('/pedidos/{id}', [PedidosController::class, 'show'])->name('pedidos.detalles'); //listar por id
Route::get('/crear-pedido', function(){
    return view("pedidos.crear");
});

Route::resource('/empleados', EmpleadosController::class); //
Route::get('/empleados/{id}', [EmpleadoController::class, 'show'])->name('empleados.detalles'); //listar por id
Route::get('/crear-empleado', function(){
    return view("empleados.crear");
    });
    
Route::resource('/clientes', ClientesController::class); //
Route::get('/clientes/{id}', [ClientesController::class, 'show'])->name('clientes.detalles'); //listar por id
Route::get('/crear-cliente', function(){
    return view("clientes.crear");
});

Route::resource('/inventarios', InventariosController::class); //
Route::get('/inventarios/{id}', [InventariosController::class, 'show'])->name('inventarios.detalles'); //listar por id
Route::get('/crear-inventario', function(){
    return view("inventarios.crear");
});


Route::get('/', function () {
    return view('home');
});

