<?php


namespace App\App\Productos\Repositories;

use App\App\Productos\Interfaces\ProductoInterface;
use App\Models\Producto;

class ProductosRepository implements ProductoInterface{

    protected $producto;

    public function __construct(Producto $producto){
        $this->producto = $producto;
    }

    public function getAll(){
        return $this->producto->all();
    }

      public function getAllFilter($r){
        return $this->producto->paginate($r);
    }

    public function getById($id){
        return $this->producto->find($id);
    }


    public function store($request){
        return $this->producto->create($request->all());
    }

     public function update($id, $request){
        return $this->producto->find($id)->update($request);
    }





}


?>
