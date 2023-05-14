<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  


class DetallePedidoArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_detalle_pedido_articulos')->insert([
            [
                'fk_id_articulo' => 1,
                'fk_id_pedido' => 1,
                'cantidad_detalle' => 2,
                'descuento_detalle' => 0.10,
            ],
            [
                'fk_id_articulo' => 2,
                'fk_id_pedido' => 2,
                'cantidad_detalle' => 1,
                'descuento_detalle' => 0.05,
            ],
            [
                'fk_id_articulo' => 3,
                'fk_id_pedido' => 3,
                'cantidad_detalle' => 3,
                'descuento_detalle' => 0.20,
            ],
            [
                'fk_id_articulo' => 4,
                'fk_id_pedido' => 4,
                'cantidad_detalle' => 2,
                'descuento_detalle' => 0.15,
            ],
            [
                'fk_id_articulo' => 5,
                'fk_id_pedido' => 5,
                'cantidad_detalle' => 1,
                'descuento_detalle' => 0.05,
            ],
            // Agregue aquí los 12 registros restantes
            [
                'fk_id_articulo' => 6,
                'fk_id_pedido' => 6,
                'cantidad_detalle' => 1,
                'descuento_detalle' => 0.05,
            ],
            [
                'fk_id_articulo' => 7,
                'fk_id_pedido' => 7,
                'cantidad_detalle' => 4,
                'descuento_detalle' => 0.25,
            ],
            [
                'fk_id_articulo' => 8,
                'fk_id_pedido' => 8,
                'cantidad_detalle' => 2,
                'descuento_detalle' => 0.10,
            ],
            [
                'fk_id_articulo' => 9,
                'fk_id_pedido' => 9,
                'cantidad_detalle' => 1,
                'descuento_detalle' => 0.05,
            ],
            [
                'fk_id_articulo' => 10,
                'fk_id_pedido' => 10,
                'cantidad_detalle' => 3,
                'descuento_detalle' => 0.20,
            ],
            [
                'fk_id_articulo' => 11,
                'fk_id_pedido' => 11,
                'cantidad_detalle' => 2,
                'descuento_detalle' => 0.15,
            ],
            [
                'fk_id_articulo' => 12,
                'fk_id_pedido' => 12,
                'cantidad_detalle' => 1,
                'descuento_detalle' => 0.10,
            ]
        ]);
    }
}



