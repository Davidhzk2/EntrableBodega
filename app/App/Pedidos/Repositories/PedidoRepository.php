<?php


namespace App\App\Pedidos\Repositories;

use App\App\Pedidos\Interfaces\PedidoInterface;
use App\Models\Pedido;

class PedidoRepository implements PedidoInterface{

    protected $pedido;

    public function __construct(Pedido $pedido){
        $this->pedido = $pedido;
    }

    public function getAll(){
        return $this->pedido->all();
    }

    public function getAllFilter($r){
        return $this->pedido->paginate($r);
    }

    public function getById($id){
        return $this->pedido->find($id);
    }


    public function store($request){
        return $this->pedido->create($request->all());
    }

    public function update($id, $request){
        return $this->pedido->find($id)->update($request);
    }





}


?>
