<?php

class PaisTableSeeder extends Seeder {

	public function run()
	{
		$paises = [
			['nombre'=>'Perú', 'slug'=>'peru', 'codigo'=>'PE', 'estado'=>1],
			['nombre'=>'Argentina', 'slug'=>'argentina', 'codigo'=>'AR', 'estado'=>1],
			['nombre'=>'Colombia', 'slug'=>'colombia', 'codigo'=>'CO', 'estado'=>1],
		];

		foreach($paises as $pais)
		{
			if ( Pais::where('nombre', $pais['nombre'])->count() ) {
				continue;
			}
			Pais::create($pais);
		}
	}

}