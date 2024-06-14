<?php

namespace App\App\Productos\Interfaces;

interface  ProductoInterface{


    public function getById($id);
    public function getAll();
    public function getAllFilter($r);
    public function store($request);
    public function update($id, $request);
}
?>
