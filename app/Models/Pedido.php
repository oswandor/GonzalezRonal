<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'tb_pedidos';  
    protected $primaryKey = 'id_pedido';


    protected $fillable = [
        'fecha_pedido',
        'fecha_entrega_pedido',
        'observaciones_pedido',
        'fk_id_cliente',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'fk_id_cliente');
    }

}
