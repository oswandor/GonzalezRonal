<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedidoArticulo extends Model
{
    use HasFactory;
    protected $table = 'tb_detalle_pedido_articulos';
    protected $fillable = [
        'fk_id_articulo',
        'fk_id_pedido',
        'cantidad_detalle',
        'descuento_detalle'
    ];
    public $timestamps = false;

    public function articulo()
    {
        return $this->belongsTo('App\Articulo', 'fk_id_articulo', 'id_articulo');
    }

    public function pedido()
    {
        return $this->belongsTo('App\Pedido', 'fk_id_pedido', 'id_pedido');
    }
}
