<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedidos';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'no_factura',
        'fecha_factura',
        'hora_factura',
        'empleado_id',
        'cliente_id',
        'tipo_pago',
        'valor_factura'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }

    public function detallePedidos()
    {
        return $this->hasMany(DetallePedido::class, 'pedido_id');
    }
}
