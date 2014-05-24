<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleosTable extends Migration {

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
            $table->string('titulo')
                ->nullable()
                ->default(null);
            $table->longText('descripcion')
                ->nullable()
                ->default(null);
            $table->string('slug')
                ->nullable()
                ->default(null);            
            $table->boolean('estado')
                ->default(1);
            
            // Relaciones
            $table->integer('user_id')
                ->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('user');
            
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
