<?php

namespace App\App\Inventarios\Interfaces;

interface  InventarioInterface{


    public function getById($id);
    public function getAll();
    public function getAllFilter($r);
    public function store($request);
    public function update($id, $request);
}
?>
