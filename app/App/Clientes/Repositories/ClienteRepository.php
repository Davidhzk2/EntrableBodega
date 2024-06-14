<?php

namespace App\App\Clientes\Repositories;

use App\App\Clientes\Interfaces\ClienteInterface;
use App\Models\Cliente;

class ClienteRepository implements ClienteInterface{


    protected $cliente;
    public function __construct(Cliente $cliente){
        $this->cliente = $cliente;
    }

    public function getById($id)
    {
        return $this->cliente->find($id);
    }

    public function getAll()
    {
        return $this->cliente->all();
    }

    public function getAllFilter($r)
    {
        return $this->cliente->paginate($r);
    }

    public function store($request)
    {
        return $this->cliente->create($request->all());
    }

    public function update($id, $request)
    {
        return $this->cliente->find($id)->update($request);
    }
}
