<?php

namespace App\App\Clientes\Controllers;

use App\App\Clientes\Repositories\ClienteRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class ClientesController extends Controller
{
    protected $clienteRepository;

    public function __construct(ClienteRepository $clienteRepository){

        $this->clienteRepository = $clienteRepository;
    }
    public function index()
    {
        try {
            $clientes = $this->clienteRepository->getAll();
            return view("clientes.index", compact('clientes'));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $cliente = $this->clienteRepository->store($request);
            return response()->json($cliente, 201);
        }catch (\Exception $e){
            die($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // try {
        //     $clientes = $this->clienteRepository.getById($id);
        //     return view("clientes.index", compact('clientes'));
        // }catch(Exception $e){
        //     die($e->getMessage());
        // }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
