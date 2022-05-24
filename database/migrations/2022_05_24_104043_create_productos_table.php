<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto');
            $table->string('descripcion_producto');
            $table->string('imagen_producto');
            $table->string('pais_procedencia');
            $table->integer('precio_producto');
            $table->string('kcal');
            $table->string('informacion_nutricional');
        });


        // Insert some stuff
        DB::table('productos')->insert(
            Array([
                'nombre_producto' => 'Pata de jamón',
                'descripcion_producto' => 'Pata de jamon de bellota',
                'imagen_producto' => 'jamon.png',
                'pais_procedencia' => 'España',
                'precio_producto' => 300,
                'kcal' => 'pocas',
                'informacion_nutricional' => 'nada que decir tss'
            ],
            [
                'nombre_producto' => 'CocaCola',
                'descripcion_producto' => 'cocacola fresca',
                'imagen_producto' => 'coca-cola.jpg',
                'pais_procedencia' => 'EEUU',
                'precio_producto' => 1,
                'kcal' => 'muchas',
                'informacion_nutricional' => 'mucha azucar'
            ])
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
