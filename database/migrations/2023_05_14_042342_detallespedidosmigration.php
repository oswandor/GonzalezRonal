<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_detalle_pedido_articulos', function (Blueprint $table) {
            $table->foreignId('fk_id_articulo')->constrained('tb_articulos');
            $table->foreignId('fk_id_pedido')->constrained('tb_pedidos');
            $table->integer('cantidad_detalle');
            $table->float('descuento_detalle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_detalle_pedido_articulos');
    }
};
