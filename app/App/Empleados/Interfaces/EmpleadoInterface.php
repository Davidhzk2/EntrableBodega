<?php

namespace App\App\Empleados\Interfaces;

interface  EmpleadoInterface{


    public function getById($id);
    public function getAll();
    public function getAllFilter($r);
    public function store($request);
    public function update($id, $request);
}
?>
