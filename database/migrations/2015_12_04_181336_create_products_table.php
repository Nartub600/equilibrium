<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('nombre');
            $table->string('foto');
            $table->string('barcode', 13);
            $table->string('marca');
            $table->string('fuente');
            $table->string('denominacion_legal');
            $table->string('alimento');
            $table->decimal('gramos', 8, 3);
            $table->decimal('calorias', 8, 3);
            $table->decimal('calorias_porcentaje', 8, 3);
            $table->decimal('hidratos', 8, 3);
            $table->decimal('azucares', 8, 3);
            $table->decimal('sacarosa', 8, 3);
            $table->decimal('polidextro', 8, 3);
            $table->decimal('almidon', 8, 3);
            $table->decimal('polialcoholes', 8, 3);
            $table->decimal('fibra', 8, 3);
            $table->decimal('proteinas', 8, 3);
            $table->decimal('grasas', 8, 3);
            $table->decimal('ags', 8, 3);
            $table->decimal('agmi', 8, 3);
            $table->decimal('agpi', 8, 3);
            $table->decimal('trans', 8, 3);
            $table->decimal('colesterol', 8, 3);
            $table->decimal('epa', 8, 3);
            $table->decimal('dha', 8, 3);
            $table->decimal('omega_3', 8, 3);
            $table->decimal('omega_6', 8, 3);
            $table->decimal('omega_9', 8, 3);
            $table->decimal('sodio', 8, 3);
            $table->decimal('calcio', 8, 3);
            $table->decimal('hierro', 8, 3);
            $table->decimal('fosforo', 8, 3);
            $table->decimal('potasio', 8, 3);
            $table->decimal('magnesio', 8, 3);
            $table->decimal('selenio', 8, 3);
            $table->decimal('zinc', 8, 3);
            $table->decimal('vit_a_mc', 8, 3);
            $table->decimal('vit_a_ui', 8, 3);
            $table->decimal('vit_e_mc', 8, 3);
            $table->decimal('vit_e_ui', 8, 3);
            $table->decimal('vit_d', 8, 3);
            $table->decimal('b1', 8, 3);
            $table->decimal('b2', 8, 3);
            $table->decimal('b6', 8, 3);
            $table->decimal('b9', 8, 3);
            $table->decimal('b12', 8, 3);
            $table->decimal('vit_c', 8, 3);
            $table->decimal('indice_glucemico', 8, 3);
            $table->decimal('alcohol', 8, 3);
            $table->decimal('calorias_alcohol', 8, 3);
            $table->string('descripcion');
            $table->string('ingredientes');
            $table->string('nombre_cientifico');
            $table->string('tags');
            $table->string('otros_nombres');
            $table->string('rnpa');
            $table->string('rne');
            $table->string('equivalencia');
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
        Schema::drop('products');
    }
}
