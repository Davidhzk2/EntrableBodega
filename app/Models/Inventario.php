<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $table = 'inventarios';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'producto_id',
        'cantidad_ingreso',
        'cantidad_despacho',
        'fecha_ingreso',
        'fecha_despacho'
    ];
}
