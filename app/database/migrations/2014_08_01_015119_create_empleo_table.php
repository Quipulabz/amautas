<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleo', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('titulo');
            $table->longText('descripcion');
            $table->string('slug')
                ->nullable()
                ->default(null);
            $table->boolean('publicado')
                ->default(0);
            $table->boolean('estado')
                ->default(1);
            $table->decimal('sueldo')
                ->nullable()
                ->default(null);
            $table->boolean('sueldo_negociable')
                ->default(1);

            // Relaciones
            $table->integer('user_id')
                ->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('user');

            $table->integer('modalidad_id')
                ->unsigned();
            $table->foreign('modalidad_id')
                ->references('id')
                ->on('modalidad');

            $table->integer('especialidad_id')
                ->unsigned();
            $table->foreign('especialidad_id')
                ->references('id')
                ->on('especialidad');

            $table->integer('pais_id')
                ->unsigned();
            $table->foreign('pais_id')
                ->references('id')
                ->on('pais');

            $table->integer('departamento_id')
                ->unsigned();
            $table->foreign('departamento_id')
                ->references('id')
                ->on('departamento');

            // Fechas
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleo');
    }

}
