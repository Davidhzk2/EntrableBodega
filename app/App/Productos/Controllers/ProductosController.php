<?php

namespace App\App\Productos\Controllers;

use App\App\Productos\Repositories\ProductosRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class ProductosController extends Controller
{

    protected $ProductoRepository;

    public function __construct(ProductosRepository $ProductoRepository){

        $this->ProductoRepository = $ProductoRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            //code
            $productos = $this->ProductoRepository->getAll();
            return view("productos.index", compact('productos'));
        } catch (Exception $e) {
            die($e->getMessage());
            //throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $producto= $this->ProductoRepository->store($request);
            return response()->json($producto, 201);
        }catch (Exception $e){
            die($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            //code
            return response()->json($this->ProductoRepository->getById($id),200);
        } catch (Exception $e) {
            die($e->getMessage());
            //throw $th;
        }
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $user = $this->ProductoRepository->update($id, $request);
            return response()->json($user, 200);
        }catch (Exception $e){
            die($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
