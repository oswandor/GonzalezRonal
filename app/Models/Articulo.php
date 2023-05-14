<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    protected $table = 'tb_articulos';

    public $timestamps = false;
    protected $primaryKey = 'id_articulo';

    protected $fillable = [
        'nombre_articulo',
        'descripcion_articulo',
        'cantidad_inventario_articulo',
        'precio_articulo'
    ];


}



