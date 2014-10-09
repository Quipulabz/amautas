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
                $empleo->sueldo         = $faker->randomFloat(2, 500, 3000);
                $empleo->sueldo_negociable      = $faker->numberBetween(0, 1);
                $empleo->departamento_id        = $faker->numberBetween(1, 7);
                $empleo->especialidad_id        = $faker->numberBetween(1, 7);
                $empleo->modalidad_id           = $faker->numberBetween(1, 4);
                $empleo->user_id        = $user->id;

                $empleo->save();
            }
        };
    }

}