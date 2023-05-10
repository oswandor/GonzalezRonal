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
        ]);
    }
}



