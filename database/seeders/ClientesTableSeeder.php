<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_clientes')->insert([
            [
                'nombre_cliente' => 'Juan',
                'apellido_cliente' => 'Pérez',
                'fecha_nacimiento_cliente' => '1980-05-15'
            ],
            [
                'nombre_cliente' => 'María',
                'apellido_cliente' => 'García',
                'fecha_nacimiento_cliente' => '1995-09-25'
            ],
            [
                'nombre_cliente' => 'Carlos',
                'apellido_cliente' => 'Gómez',
                'fecha_nacimiento_cliente' => '1978-03-10'
            ],
            [
                'nombre_cliente' => 'Laura',
                'apellido_cliente' => 'Hernández',
                'fecha_nacimiento_cliente' => '2000-01-02'
            ],
            [
                'nombre_cliente' => 'Pedro',
                'apellido_cliente' => 'Fernández',
                'fecha_nacimiento_cliente' => '1990-12-22'
            ],
            [
                'nombre_cliente' => 'Ana',
                'apellido_cliente' => 'Martínez',
                'fecha_nacimiento_cliente' => '1985-06-18'
            ],
            [
                'nombre_cliente' => 'Diego',
                'apellido_cliente' => 'López',
                'fecha_nacimiento_cliente' => '1999-11-05'
            ],
            [
                'nombre_cliente' => 'Sofía',
                'apellido_cliente' => 'Torres',
                'fecha_nacimiento_cliente' => '1987-07-20'
            ],
            [
                'nombre_cliente' => 'Raúl',
                'apellido_cliente' => 'Ramírez',
                'fecha_nacimiento_cliente' => '1975-09-09'
            ],
            [
                'nombre_cliente' => 'Julia',
                'apellido_cliente' => 'Sánchez',
                'fecha_nacimiento_cliente' => '1992-04-12'
            ],
            [
                'nombre_cliente' => 'Jorge',
                'apellido_cliente' => 'Castro',
                'fecha_nacimiento_cliente' => '1983-02-01'
            ],
            [
                'nombre_cliente' => 'Lucía',
                'apellido_cliente' => 'Gutiérrez',
                'fecha_nacimiento_cliente' => '1996-12-29'
            ]
        ]);
    }
}
