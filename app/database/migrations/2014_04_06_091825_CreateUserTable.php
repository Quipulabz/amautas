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
            $table->increments('id');
            $table->string('username')
                ->nullable()
                ->default(null);
            $table->string('password')
                ->nullable()
                ->default(null);
            $table->string('email')
                ->unique()
                ->nullable()
                ->default(null);
            $table->boolean('estado')
                ->default(1);
            $table->string('remember_token')
                ->nullable()
                ->default(null);
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
