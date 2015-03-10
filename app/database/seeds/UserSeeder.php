<?php

class UserSeeder extends DatabaseSeeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            array(
                'nombre'    => 'Nick Bryan',
                'apellido'  => 'Palomino Pérez',
                'sexo'      => 'M',
                'es_activo' => 1,
                'pais_id'   => 1,
                'departamento_id'   => 2,
                'especialidad_id'   => 3,
                'password'  => Hash::make('1234567u'),
                'email'     => 'nbpalomino@gmail.com',
                'estado'    => 1
            ),
            array(
                'nombre'    => 'Miriam Imelda',
                'apellido'  => 'Alvarez Romero',
                'sexo'      => 'F',
                'es_activo' => 0,
                'pais_id'   => 1,
                'departamento_id'   => 3,
                'especialidad_id'   => 2,
                'password'  => Hash::make('1234567u'),
                'email'     => 'malvarez@gmail.com',
                'estado'    => 1
            ),
            array(
                'nombre'    => 'Raul',
                'apellido'  => 'Hugo',
                'sexo'      => 'M',
                'es_activo' => 1,
                'pais_id'   => 1,
                'departamento_id'   => 4,
                'especialidad_id'   => 4,
                'password'  => Hash::make('1234567u'),
                'email'     => 'rsasd@gmail.com',
                'estado'    => 1
            )
        );

        foreach ($users as $user) {

            if ( User::where('email', $user['email'])->count() ) {
                continue;
            }
            User::create($user);
        };

    }

}