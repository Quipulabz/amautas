<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamento', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre');
            $table->longText('descripcion');
            $table->boolean('estado')
                ->default(1);

            // Relaciones
            $table->integer('pais_id')
                ->unsigned();
            $table->foreign('pais_id')
                ->references('id')
                ->on('pais');

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
        Schema::dropIfExists('departamento');
    }

}
