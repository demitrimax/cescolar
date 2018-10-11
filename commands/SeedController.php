<?php

// commands/SeedController.php
namespace app\commands;

use yii\console\Controller;
use app\models\alumnos;
use app\models\carreras;
use app\models\maestros;

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
			['id' => 4, 'idcarrera' => 'LICMEVEZOO', 'nombre' => 'Licenciatura en Medicina Veterinaria y Zootecnia'],
			['id' => 5, 'idcarrera' => 'LICINFADM', 'nombre' => 'Licenciatura en Informática Administrativa'],
			['id' => 6, 'idcarrera' => 'LICSISCOM', 'nombre' => 'Licenciatura en Sistemas Computacionales'],
			['id' => 7, 'idcarrera' => 'LITELEMAT', 'nombre' => 'Licenciatura en Telemática '],
			['id' => 8, 'idcarrera' => 'LICTI', 'nombre' => 'Licenciatura en Tecnologías de la Información'],
			['id' => 9, 'idcarrera' => 'INGINFADM', 'nombre' => 'Ingeniería en Informática Administrativa'],
			['id' => 10, 'idcarrera' => 'INGSISTCOMP', 'nombre' => 'Ingeniería en Sistemas Computacionales'],
			['id' => 11, 'idcarrera' => 'INGSISTCOMP', 'nombre' => 'Ingeniería Civil '],
			['id' => 12, 'idcarrera' => 'INGSISTCOMP', 'nombre' => 'Ingeniería Eléctrica y Electrónica'], 
			['id' => 13, 'idcarrera' => 'INGSISTCOMP', 'nombre' => 'Ingeniería Mecánica Eléctrica'], 
			['id' => 14, 'idcarrera' => 'INGSISTCOMP', 'nombre' => 'Ingeniería Química'],
			['id' => 15, 'idcarrera' => 'INGSISTCOMP', 'nombre' => 'Licenciatura en Arquitectura'],
			
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
		for ($i=0; $i < 10000; $i++) {
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
		
		//alta de maestros

		for ($i=0; $i < 500; $i++)
		{
			$maestros = new maestros();
			//primero decidir el sexo del profesor
			$sexo = $faker->randomElement($array = array ('F','M'));
			//seleccionar por el sexo el nombre
			if ($sexo == 'F') { 
				$NombreProfe = $faker->firstNameFemale; 
			}
			if ($sexo == 'M') { 
				$NombreProfe = $faker->firstNameMale; 
			} 

			$maestros->idcie		= $faker->bothify('M#?#??'); //varchar(6)	
			$maestros->nombre		= $NombreProfe; //varchar(35)	
			$maestros->apellidopat	= $faker->lastName; //varchar(35)	
			$maestros->apellidomat	= $faker->lastName; //varchar(35)	
			$maestros->curp			= $faker->creditCardNumber;//varchar(16)	
			$maestros->genero		= $sexo;	//enum('F','M')	
			$maestros->telfijo		= $faker->numerify('993#######');	//varchar(10) NULL []	
			$maestros->cell			= $faker->numerify('993#######');	//varchar(10) NULL []	
			$maestros->email		= $faker->safeEmail;	//varchar(35)	
			$maestros->status		= $faker->randomElement($array = array ('ACTIVO','COMISION','BAJA'));	//enum('ACTIVO','COMISION','BAJA') NULL
			//print_r($maestros);	
			$maestros->save();
			echo "Creando Registro...".$i.chr(10);
		}

		
    }
}
