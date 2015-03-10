<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PaisTableSeeder');
		$this->call('EspecialidadSeeder');
		$this->call('DepartamentoSeeder');
		$this->call('ModalidadSeeder');
		$this->call('UserSeeder');
		$this->call('EmpleoSeeder');
		$this->command->info('Tables seeded');
	}

}
