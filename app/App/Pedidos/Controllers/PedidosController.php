<?php

namespace App\App\Pedidos\Controllers;

use App\App\Pedidos\Repositories\PedidoRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class PedidosController extends Controller
{
    protected $PedidoRepository;

    public function __construct(PedidoRepository $PedidoRepository){

        $this->PedidoRepository = $PedidoRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            //code
            $pedidos = $this->PedidoRepository->getAll();
            return view("pedidos.index", compact('pedidos'));
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
            $pedido= $this->PedidoRepository->store($request);

            return redirect()->route('pedidos.detalles', $pedido->Id)
                ->with('success', 'pedido creado exitosamente')
                ->with('pedido', $pedido);
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
            $pedido = $this->PedidoRepository->getById($id);
            return view('pedidos.detalles', compact('pedido'));
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
            $user = $this->PedidoRepository->update($id, $request);
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
