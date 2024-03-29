<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 



class PedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_pedidos')->insert([
            [
                'fecha_pedido' => '2023-05-08',
                'fecha_entrega_pedido' => '2023-05-15',
                'observaciones_pedido' => 'Pedido de ropa deportiva',
                'fk_id_cliente' => 1
            ],
            [
                'fecha_pedido' => '2023-05-10',
                'fecha_entrega_pedido' => '2023-05-20',
                'observaciones_pedido' => 'Pedido de zapatos',
                'fk_id_cliente' => 3
            ],
            [
                'fecha_pedido' => '2023-05-12',
                'fecha_entrega_pedido' => '2023-05-22',
                'observaciones_pedido' => 'Pedido de ropa casual',
                'fk_id_cliente' => 2
            ],
            [
                'fecha_pedido' => '2023-05-15',
                'fecha_entrega_pedido' => '2023-05-25',
                'observaciones_pedido' => 'Pedido de relojes',
                'fk_id_cliente' => 4
            ],
            [
                'fecha_pedido' => '2023-05-20',
                'fecha_entrega_pedido' => '2023-06-01',
                'observaciones_pedido' => 'Pedido de bolsos',
                'fk_id_cliente' => 5
            ],
            [
                'fecha_pedido' => '2023-05-23',
                'fecha_entrega_pedido' => '2023-06-03',
                'observaciones_pedido' => 'Pedido de ropa formal',
                'fk_id_cliente' => 6
            ],
            [
                'fecha_pedido' => '2023-05-25',
                'fecha_entrega_pedido' => '2023-06-05',
                'observaciones_pedido' => 'Pedido de artículos para el hogar',
                'fk_id_cliente' => 7
            ],
            [
                'fecha_pedido' => '2023-05-28',
                'fecha_entrega_pedido' => '2023-06-07',
                'observaciones_pedido' => 'Pedido de productos electrónicos',
                'fk_id_cliente' => 8
            ],
            [
                'fecha_pedido' => '2023-06-01',
                'fecha_entrega_pedido' => '2023-06-11',
                'observaciones_pedido' => 'Pedido de juguetes para niños',
                'fk_id_cliente' => 9
            ],
            [
                'fecha_pedido' => '2023-06-05',
                'fecha_entrega_pedido' => '2023-06-15',
                'observaciones_pedido' => 'Pedido de alimentos y bebidas',
                'fk_id_cliente' => 10
            ],
            [
                'fecha_pedido' => '2023-06-08',
                'fecha_entrega_pedido' => '2023-06-18',
                'observaciones_pedido' => 'Pedido de libros',
                'fk_id_cliente' => 11
            ],
            [
                'fecha_pedido' => '2023-06-12',
                'fecha_entrega_pedido' => '2023-06-22',
                'observaciones_pedido' => 'Pedido de artículos para mascotas',
                'fk_id_cliente' => 12
            ]
        ]);

        
    }
}
