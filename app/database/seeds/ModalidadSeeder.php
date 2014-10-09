<?php

use Faker\Factory as Faker;

class ModalidadSeeder extends DatabaseSeeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modalidades = [
            ['nombre'=>'Tiempo completo','descripcion'=>'Modalidad de empleo','estado'=>1],
            ['nombre'=>'Medio tiempo','descripcion'=>'Modalidad de empleo','estado'=>1],
            ['nombre'=>'Por horas','descripcion'=>'Modalidad de empleo','estado'=>1],
            ['nombre'=>'Eventual','descripcion'=>'Modalidad de empleo','estado'=>1],
        ];

        foreach($modalidades as $modalidad) {

            if (Especialidad::where('nombre', $modalidad['nombre'])) {
                continue;
            }
            Modalidad::create($modalidad);
        };
    }

}