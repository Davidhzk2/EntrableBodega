<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table = 'empleados';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'identificacion',
        'nombres',
        'apellidos',
        'salario',
        'cargo',
        'direccion',
        'telefono',
        'email',
        'fecha_ingreso'
    ];

}
