<?php

namespace App\App\Inventarios\Controllers;

use App\App\Inventarios\Repositories\InventariosRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class InventariosController extends Controller
{

    protected $InventarioRepository;

    public function __construct(InventariosRepository $InventarioRepository){

        $this->InventarioRepository = $InventarioRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            //code
            $inventarios = $this->InventarioRepository->getAll();
            return view("inventarios.index", compact('inventarios'));
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
            $inventario= $this->InventarioRepository->store($request);

            return redirect()->route('inventarios.detalles', $inventario->Id)
                         ->with('success', 'inve$inventario creado exitosamente')
                         ->with('inve$inventario', $inventario);
            //return response()->json($producto, 201);
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
            $inventario = $this->InventarioRepository->getById($id);
            return view('inventarios.detalles', compact('inventario'));
            //return response()->json(,200);
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
            $user = $this->InventarioRepository->update($id, $request);
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
