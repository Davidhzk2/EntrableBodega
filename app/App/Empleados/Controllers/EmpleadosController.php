<?php

namespace App\App\Empleados\Controllers;

use App\App\Empleados\Repositories\EmpleadoRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\Exception;
use Carbon\Carbon; 

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
            $request["fecha_ingreso"] = Carbon::now();
            $empleado= $this->empleadosRepository->store($request);

            //redirigir al la vista del empleado
            return redirect()->route('empleados.detalles', $empleado->Id)
                         ->with('success', 'Empleado creado exitosamente')
                         ->with('empleado', $empleado);
            // return response()->json($empleado, 201);
        }catch (Exception $e){
            die($e->getMessage());
        }
    }


    public function show(string $id)
    {
        try {
            $empleado= $this->empleadosRepository->getById($id);
            return view('empleados.detalles', compact('empleado'));
            //return response()->json($empleado, 201);
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
