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
            ['nombre_articulo' => 'Bolso', 'descripcion_articulo' => 'Bolso de cuero negro', 'cantidad_inventario_articulo' => 15, 'precio_articulo' => 89.99],
            ['nombre_articulo' => 'Gorra', 'descripcion_articulo' => 'Gorra deportiva negra', 'cantidad_inventario_articulo' => 50, 'precio_articulo' => 15.00],
            ['nombre_articulo' => 'Calcetines', 'descripcion_articulo' => 'Calcetines deportivos blancos', 'cantidad_inventario_articulo' => 200, 'precio_articulo' => 5.99],
            ['nombre_articulo' => 'Chamarra', 'descripcion_articulo' => 'Chamarra de piel café', 'cantidad_inventario_articulo' => 10, 'precio_articulo' => 399.99],
            ['nombre_articulo' => 'Shorts', 'descripcion_articulo' => 'Shorts deportivos negros', 'cantidad_inventario_articulo' => 75, 'precio_articulo' => 29.50],
            ['nombre_articulo' => 'Mochila', 'descripcion_articulo' => 'Mochila escolar negra', 'cantidad_inventario_articulo' => 25, 'precio_articulo' => 79.99],
            ['nombre_articulo' => 'Gafas', 'descripcion_articulo' => 'Gafas de sol negras', 'cantidad_inventario_articulo' => 40, 'precio_articulo' => 49.99],
            ['nombre_articulo' => 'Bufanda', 'descripcion_articulo' => 'Bufanda de lana gris', 'cantidad_inventario_articulo' => 100, 'precio_articulo' => 19.99]
        ]);
    }
}







