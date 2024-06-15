<?php

namespace App\App\Pedidos\Interfaces;
interface  PedidoInterface{


    public function getById($id);
    public function getAll();
    public function getAllFilter($r);
    public function store($request);
    public function update($id, $request);
}
