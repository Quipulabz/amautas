<?php

use Faker\Factory as Faker;

class EspecialidadSeeder extends DatabaseSeeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especialidades = [
            ['nombre'=>'Inicial','descripcion'=>'Especialidad docente','estado'=>1],
            ['nombre'=>'Primaria','descripcion'=>'Especialidad docente','estado'=>1],
            ['nombre'=>'Matemática','descripcion'=>'Especialidad docente','estado'=>1],
            ['nombre'=>'Lenguaje y Comunicación','descripcion'=>'Especialidad docente','estado'=>1],
            ['nombre'=>'Arte','descripcion'=>'Especialidad docente','estado'=>1],
            ['nombre'=>'Ingles','descripcion'=>'Especialidad docente','estado'=>1],
            ['nombre'=>'Historia','descripcion'=>'Especialidad docente','estado'=>1]
        ];

        foreach($especialidades as $especialidad) {

            Especialidad::create($especialidad);
        };
    }

}