<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArticulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_articulos')->insert([
            ['nombre_articulo' => 'Camiseta', 'descripcion_articulo' => 'Camiseta deportiva blanca', 'cantidad_inventario_articulo' => 100, 'precio_articulo' => 25.99],
            ['nombre_articulo' => 'Pantalón', 'descripcion_articulo' => 'Pantalón de mezclilla azul', 'cantidad_inventario_articulo' => 50, 'precio_articulo' => 45.50],
            ['nombre_articulo' => 'Zapatos', 'descripcion_articulo' => 'Zapatos casuales negros', 'cantidad_inventario_articulo' => 30, 'precio_articulo' => 69.99],
            ['nombre_articulo' => 'Reloj', 'descripcion_articulo' => 'Reloj de pulsera dorado', 'cantidad_inventario_articulo' => 20, 'precio_articulo' => 150.00],
            ['nombre_articulo' => 'Bolso', 'descripcion_articulo' => 'Bolso de cuero negro', 'cantidad_inventario_articulo' => 15, 'precio_articulo' => 89.99]
        ]);
    }
}







