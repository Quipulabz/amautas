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

		$this->call('UserSeeder');
		$this->call('ModalidadSeeder');
		$this->call('EspecialidadSeeder');
		$this->call('DepartamentoSeeder');
		$this->call('EmpleoSeeder');
	}

}
