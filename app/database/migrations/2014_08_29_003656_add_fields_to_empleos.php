<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToEmpleos extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empleo', function(Blueprint $table)
        {
            $table->decimal('sueldo')
                ->nullable()
                ->default(null);

            $table->boolean('sueldo_negociable')->default(1);

            $table->integer('modalidad_id')
                ->unsigned();
            $table->foreign('modalidad_id')
                ->references('id')
                ->on('modalidad');

            // Relaciones
            $table->integer('especialidad_id')
                ->unsigned();
            $table->foreign('especialidad_id')
                ->references('id')
                ->on('especialidad');

            $table->integer('departamento_id')
                ->unsigned();
            $table->foreign('departamento_id')
                ->references('id')
                ->on('departamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empleo', function(Blueprint $table)
        {
            $table->dropColumn('sueldo');
            $table->dropColumn('sueldo_negociable');
            $table->dropColumn('especialidad_id');
            $table->dropColumn('departamento_id');
            $table->dropColumn('modalidad_id');
        });
    }

}
