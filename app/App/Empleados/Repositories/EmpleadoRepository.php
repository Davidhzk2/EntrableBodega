<?php
namespace App\App\Empleados\Repositories;

use App\App\Empleados\Interfaces\EmpleadoInterface;
use App\Models\Empleado;

class EmpleadoRepository implements EmpleadoInterface {

    protected $empleado;

    public function __construct(Empleado $empleado){
        $this->empleado = $empleado;
    }


    public function getById($id)
    {
        return $this->empleado->find($id);
    }

    public function getAll()
    {
        return $this->empleado->all();
    }

    public function getAllFilter($r)
    {
        return $this->empleado->paginate($r);
    }

    public function store($request)
    {
        return $this->empleado->create($request->all());
    }

    public function update($id, $request)
    {
        return $this->empleado->find($id)->update($request);
    }
}
