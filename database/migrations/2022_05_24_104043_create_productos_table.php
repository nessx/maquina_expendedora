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
                'imagen_producto' => 'jamon.jpg',
                'pais_procedencia' => 'España',
                'precio_producto' => 300,
                'kcal' => 'pocas',
                'informacion_nutricional' => 'nada que decir tss'
            ],[
                'nombre_producto' => 'CocaCola',
                'descripcion_producto' => 'cocacola fresca',
                'imagen_producto' => 'coca-cola.jpg',
                'pais_procedencia' => 'EEUU',
                'precio_producto' => 1,
                'kcal' => 'muchas',
                'informacion_nutricional' => 'mucha azucar'
            ],[
                'nombre_producto' => 'lays',
                'descripcion_producto' => 'Patatas fritas',
                'imagen_producto' => 'lays.jpg',
                'pais_procedencia' => 'España',
                'precio_producto' => 200,
                'kcal' => 'muchas',
                'informacion_nutricional' => 'Son unas saladas'
            ],[
                'nombre_producto' => 'Nutella',
                'descripcion_producto' => 'Nutella doble chocolate',
                'imagen_producto' => 'nutella.jpg',
                'pais_procedencia' => 'España',
                'precio_producto' => 790,
                'kcal' => 'Muchisimas',
                'informacion_nutricional' => 'Cada lamida es un paso más cercano a la muerte'
            ],[
                'nombre_producto' => 'Atun',
                'descripcion_producto' => 'Atun con aceite de girasol',
                'imagen_producto' => 'atun.jpg',
                'pais_procedencia' => 'España',
                'precio_producto' => 20,
                'kcal' => 'pocas',
                'informacion_nutricional' => 'Rico en mercurio'
            ],[
                'nombre_producto' => 'Platano',
                'descripcion_producto' => 'Platano de canarias',
                'imagen_producto' => 'banana.jpg',
                'pais_procedencia' => 'España',
                'precio_producto' => 50,
                'kcal' => 'medias',
                'informacion_nutricional' => 'Rico en potasio'
            ],[
                'nombre_producto' => 'Burrito',
                'descripcion_producto' => 'Burrito mexicano',
                'imagen_producto' => 'burrito.jpg',
                'pais_procedencia' => 'Mexico',
                'precio_producto' => 70,
                'kcal' => 'Muchas',
                'informacion_nutricional' => 'Te hace cagar bien fuerte'
            ],[
                'nombre_producto' => 'Estrella dam',
                'descripcion_producto' => 'Cerveza estrella dam',
                'imagen_producto' => 'estrellagl.jpg',
                'pais_procedencia' => 'España',
                'precio_producto' => 95,
                'kcal' => 'pocas',
                'informacion_nutricional' => 'Catalogada como veneno'
            ],[
                'nombre_producto' => 'Manzana',
                'descripcion_producto' => 'Manzana',
                'imagen_producto' => 'manzana.jpg',
                'pais_procedencia' => 'España',
                'precio_producto' => 30,
                'kcal' => 'pocas',
                'informacion_nutricional' => 'EL fruto del conocimiento'
            ],[
                'nombre_producto' => 'Pantera rosa',
                'descripcion_producto' => 'Pantera rosa',
                'imagen_producto' => 'panterarosa.jpg',
                'pais_procedencia' => 'España',
                'precio_producto' => 450,
                'kcal' => 'pocas',
                'informacion_nutricional' => 'Un recuerdo nostalgico de la infancia'
            ],[
                'nombre_producto' => 'Phoskito',
                'descripcion_producto'=> 'phoskito',
                'imagen_producto' => 'phoskito.jpg',
                'pais_procedencia' => 'España',
                'precio_producto' => 300,
                'kcal' => 'Muchisimas',
                'informacion_nutricional' => 'Los antiguos eran los que molaban'
            ],[
                'nombre_producto' => 'Ppringle',
                'descripcion_producto' => 'pringle.jpg',
                'imagen_producto' => 'pringle.jpg',
                'pais_procedencia' => 'España',
                'precio_producto' => 60,
                'kcal' => 'medio',
                'informacion_nutricional' => 'Su 3% de patata ya dice mucho'
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
