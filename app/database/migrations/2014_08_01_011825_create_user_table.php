<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function(Blueprint $table)
        {
            // Login
            $table->increments('id');
            $table->string('password', 64);
            $table->string('email')
                ->unique();
            $table->string('remember_token')
                ->nullable()
                ->default(null);

            // Datos personales
            $table->string('nombre');
            $table->string('apellido');
            $table->char('sexo', 1);
            $table->boolean('es_activo')
                ->default(1);
            $table->boolean('estado')
                ->default(1);

            // Campos
            $table->integer('pais_id')
                ->unsigned();
            $table->integer('departamento_id')
                ->unsigned();
            $table->integer('especialidad_id')
                ->unsigned();
            // Relaciones
            $table->foreign('pais_id')
                ->references('id')
                ->on('pais');
            $table->foreign('departamento_id')
                ->references('id')
                ->on('departamento');
            $table->foreign('especialidad_id')
                ->references('id')
                ->on('especialidad');

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
        Schema::dropIfExists('user');
    }

}
