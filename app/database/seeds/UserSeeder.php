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
                'username'  => 'nbpalomino',
                'password'  => Hash::make('1234567u'),
                'email'     => 'nbpalomino@gmail.com'
            ),
            array(
                'username'  => 'malvarez',
                'password'  => Hash::make('1234567u'),
                'email'     => 'malvarez@gmail.com'
            ),
            array(
                'username'  => 'niwdepalm',
                'password'  => Hash::make('1234567u'),
                'email'     => 'niwdepalm@gmail.com'
            ),
            array(
                'username'  => 'kate.ccopa',
                'password'  => Hash::make('1234567u'),
                'email'     => 'kate.ccopa@gmail.com'
            )
        );

        foreach ($users as $user) {
            User::create($user);
        };

        // $this->call('UserTableSeeder');
    }

}