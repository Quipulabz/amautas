<?php

use Faker\Factory as Faker;

class EmpleoSeeder extends DatabaseSeeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker  = Faker::create('es_PE');
        $users  = User::all();

        foreach($users as $user) {

            for ($j=0; $j < 5; $j++) { 
                $empleo = new Empleo;

                $empleo->titulo         = $faker->sentence($wd = 4);
                $empleo->descripcion    = $faker->paragraph($wd = 3);
                $empleo->estado         = 1;
                $empleo->user_id        = $user->id;

                $empleo->save();
            }            
        };
    }

}