<?php

namespace App\App\Empleados\Controllers;

use App\App\Empleados\Repositories\EmpleadoRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\Exception;
class EmpleadosController extends Controller
{

    protected $empleadosRepository;
    public function __construct(EmpleadoRepository $empleadosRepository){

        $this->empleadosRepository = $empleadosRepository;
    }
    public function index()
    {
        try{
            $empleados = $this->empleadosRepository->getAll();
            return view("empleados.index", compact('empleados'));
        }catch (Exception $e){
            die($e->getMessage());
        }
    }



    public function store(Request $request)
    {
        try {
            $empleado= $this->empleadosRepository->store($request);
            return response()->json($empleado, 201);
        }catch (Exception $e){
            die($e->getMessage());
        }
    }


    public function show(string $id)
    {
        try {
            $empleado= $this->empleadosRepository->getById($id);
            return response()->json($empleado, 201);
        }catch (Exception $e){
            die($e->getMessage());
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $empleado = $this->empleadosRepository->update($id, $request);
            return response()->json($empleado, 200);
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
