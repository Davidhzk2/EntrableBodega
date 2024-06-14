<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $primaryKey = 'Id';
    public $timestamps = false;
    protected $fillable = [
        'identificacion',
        'nombres',
        'apellidos',
        'direccion',
        'telefono',
        'email',
        'genero'
    ];
}
