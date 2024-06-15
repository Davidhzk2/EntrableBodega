<?php

namespace App\App\Inventarios\Repositories;

use App\App\Inventarios\Interfaces\InventarioInterface;
use App\Models\Inventario;


class InventariosRepository implements InventarioInterface{
    protected $inventario;

    public function __construct(Inventario $inventario){
        $this->inventario = $inventario;
    }

    public function getAll(){
        return $this->inventario->all();
    }

    public function getAllFilter($r){
        return $this->inventario->paginate($r);
    }

    public function getById($id){
        return $this->inventario->find($id);
    }


    public function store($request){
        return $this->inventario->create($request->all());
    }

    public function update($id, $request){
        return $this->inventario->find($id)->update($request);
    }

}

?>
