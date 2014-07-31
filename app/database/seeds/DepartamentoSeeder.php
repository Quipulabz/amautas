<?php

use Faker\Factory as Faker;

class DepartamentoSeeder extends DatabaseSeeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamentos = [
            ['nombre'=>'Lima','descripcion'=>'Departamento del perú','estado'=>1],
            ['nombre'=>'Ancash','descripcion'=>'Departamento del perú','estado'=>1],
            ['nombre'=>'Cuzco','descripcion'=>'Departamento del perú','estado'=>1],
            ['nombre'=>'Cajamarca','descripcion'=>'Departamento del perú','estado'=>1],
            ['nombre'=>'Tacna','descripcion'=>'Departamento del perú','estado'=>1],
            ['nombre'=>'Puno','descripcion'=>'Departamento del perú','estado'=>1],
            ['nombre'=>'Ica','descripcion'=>'Departamento del perú','estado'=>1]
        ];

        foreach($departamentos as $departamento) {

            Departamento::create($departamento);
        };
    }

}