<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Cliente extends Model
{
    use HasFactory;
    protected $table = 'tb_clientes';
    protected $primaryKey = 'id_cliente';
    public $timestamps = false;
    protected $fillable = [
        'nombre_cliente',
        'apellido_cliente',
        'fecha_nacimiento_cliente'
    ];

}
