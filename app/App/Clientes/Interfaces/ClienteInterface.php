<?php

namespace App\App\Clientes\Interfaces;

interface  ClienteInterface{


    public function getById($id);
    public function getAll();
    public function getAllFilter($r);
    public function store($request);
    public function update($id, $request);
}
?>

