<?php

// commands/SeedController.php
namespace app\commands;

use yii\console\Controller;
use app\models\alumnos;
//use app\models\materias;
//use app\models\status;
use app\models\carreras;
//use app\models\departamentos;
use Faker;

class SeedController extends Controller
{
    public function actionIndex()
    {

		$seeder = new \tebazil\yii2seeder\Seeder();
		$generator = $seeder->getGeneratorConfigurator();
		$faker = $generator->getFakerConfigurator();
		

		$faker = Faker\Factory::create();

		
		$carreras_array = [
			['id' => 1, 'idcarrera' => 'INGACUALIC', 'nombre' => 'Ingeniería en Acuacultura' ],
			['id' => 2, 'idcarrera' => 'INGAGROLIC', 'nombre' => 'Ingeniería en Agronomía' ],
			['id' => 3, 'idcarrera' => 'INGALIMLIC', 'nombre' => 'Ingeniería en Alimentos'],
			['id' => 4, 'idcarrera' => 'LICMEVEZOO', 'nombre' => 'Licenciatura en Informática Administrativa'],
			['id' => 5, 'idcarrera' => 'LICMEVEZOO', 'nombre' => 'Licenciatura en Medicina Veterinaria y Zootecnia'],
			['id' => 6, 'idcarrera' => 'LICMEVEZOO', 'nombre' => 'Licenciatura en Sistemas Computacionales'],
			['id' => 7, 'idcarrera' => 'LICMEVEZOO', 'nombre' => 'Licenciatura en Telemática '],
			['id' => 8, 'idcarrera' => 'LICMEVEZOO', 'nombre' => 'Licenciatura en Tecnologías de la Información'],
			['id' => 9, 'idcarrera' => 'LICMEVEZOO', 'nombre' => 'Ingeniería en Informática Administrativa'],
			['id' => 10, 'idcarrera' => 'LICMEVEZOO', 'nombre' => 'Ingeniería en Sistemas Computacionales'],
			
		];

		foreach ($carreras_array as $carrera)
			{
				$carreras = new carreras();
				$carreras->idcarreras = $carrera['id'];
				$carreras->nombre = $carrera['nombre'];
				$carreras->save();
			}

		foreach($carreras_array as $carrera)
		{
					$array_carreras[] = $carrera['id'];
		}
		//print_r($array_carreras);
		for ($i=0; $i < 500; $i++) {
			//echo $faker->ean13."; ";
  			$alumnos 					= new alumnos();
		    $alumnos->matricula 		= $faker->ean8;	
			$alumnos->nombre 			= $faker->firstName;		
			$alumnos->apellidopat 		= $faker->lastName;	
			$alumnos->apellidomat 		= $faker->lastName;
			$alumnos->curp 				= $faker->creditCardNumber; //varchar(16)	
			$alumnos->genero 			= $faker->randomElement($array = array ('F','M')) ;	//tinyint(1) NULL [0]	
			$alumnos->telfijo	 		= $faker->numerify('993#######');//varchar(10) NULL []	
			$alumnos->cell 				= $faker->numerify('993#######');	//varchar(10) []	
			$alumnos->email				= $faker->email; //varchar(35) []	
			$alumnos->fechains			= $faker->date($format = 'Y-m-d', $max = 'now'); //date	
			$alumnos->nss				= $faker->ean13; //varchar(15) NULL []	
			$alumnos->contacto				= $faker->name;//varchar(100) NULL	
			$alumnos->carreras_idcarreras 	= $faker->randomElement($array_carreras); //numberBetween($min = 1, $max = 10);//varchar(10)	
			$alumnos->status_idstatus 	= 1;	//int(2)
			//print_r($alumnos);
			$alumnos->save();
			echo "Creando Registro...".$i.chr(10);
		}
		

		
    }
}
