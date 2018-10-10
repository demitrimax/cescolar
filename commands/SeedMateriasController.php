<?php

// commands/SeedController.php
namespace app\commands;

use yii\console\Controller;

use app\models\materias;
use Faker;

class SeedMateriasController extends Controller
{
    public function actionIndex()
    {

		$seeder = new \tebazil\yii2seeder\Seeder();
		$generator = $seeder->getGeneratorConfigurator();
		$faker = $generator->getFakerConfigurator();
		

		$faker = Faker\Factory::create();

		$materias_array = [
			['clave' => 'F0001', 'nombre' => 'Ética'],
			['clave' => 'F0002', 'nombre' => 'Filosofía'],
			['clave' => 'F0003', 'nombre' => 'Metodología'],
			['clave' => 'F0004', 'nombre' => 'Cultura ambiental'],
			['clave' => 'F0005', 'nombre' => 'Lengua extranjera'],
			['clave' => 'F0006', 'nombre' => 'Lectura y redacción'],
			['clave' => 'F0007', 'nombre' => 'Derechos humanos'],
			['clave' => 'F0008', 'nombre' => 'Pensamiento matemático'],
			['clave' => 'F0009', 'nombre' => 'Herramientas de computación'],
			['clave' => 'F0026', 'nombre' => 'Biología celular'],
			['clave' => 'F0074', 'nombre' => 'Química general'],
			['clave' => 'F0075', 'nombre' => 'Fundamentos de la ingeniería'],
			['clave' => 'F0076', 'nombre' => 'Introducción a la acuacultura'],
			['clave' => 'F0077', 'nombre' => 'Artes y métodos de pesca'],
			['clave' => 'F0078', 'nombre' => 'Dibujo'],
			['clave' => 'F0079', 'nombre' => 'Técnicas de laboratorio'],
			['clave' => 'F0080', 'nombre' => 'Creatividad empresarial'],
			['clave' => 'F1001', 'nombre' => 'Ética'],
			['clave' => 'F1002', 'nombre' => 'Filosofía'],
			['clave' => 'F1003', 'nombre' => 'Metodología'],
			['clave' => 'F1004', 'nombre' => 'Cultura ambiental'],
			['clave' => 'F1005', 'nombre' => 'Lengua extranjera'],
			['clave' => 'F1006', 'nombre' => 'Lectura y redacción'],
			['clave' => 'F1007', 'nombre' => 'Derechos humanos'],
			['clave' => 'F1008', 'nombre' => 'Pensamiento matemático'],
			['clave' => 'F1009', 'nombre' => 'Herramientas de computación'],
			['clave' => 'F1010', 'nombre' => 'Cálculo Diferencial'],
			['clave' => 'F1011', 'nombre' => 'Cálculo Integral'],
			['clave' => 'F1012', 'nombre' => 'Ecuaciones Diferenciales'],
			['clave' => 'F1013', 'nombre' => 'Análisis Vectorial'],
			['clave' => 'F1014', 'nombre' => 'Algebra Lineal'],
			['clave' => 'F1015', 'nombre' => 'Lenguajes de Programación'],
			['clave' => 'F1016', 'nombre' => 'Probabilidad y Estadística'],
			['clave' => 'F1017', 'nombre' => 'Física General'],
			['clave' => 'F1018', 'nombre' => 'Química General y Laboratorio'],
			['clave' => 'F1019', 'nombre' => 'Dibujo Asistido por Computadora'],
			['clave' => 'F1020', 'nombre' => 'Métodos Numéricos'],
			['clave' => 'F1021', 'nombre' => 'Estática'],
			['clave' => 'F1036', 'nombre' => 'Creatividad empresarial'],
			['clave' => 'F1102', 'nombre' => 'Introducción a la Ciencia Animal'],
			['clave' => 'F1103', 'nombre' => 'Anatomía Descriptiva'],
			['clave' => 'F1104', 'nombre' => 'Biologia Celular'],
			['clave' => 'F1105', 'nombre' => 'Bioquímica'],
			['clave' => 'F1106', 'nombre' => 'Anatomía Topográfica'],
			['clave' => 'F1107', 'nombre' => 'Historia'],
			['clave' => 'F1180', 'nombre' => 'Físico Qúimica'],
			['clave' => 'F1210', 'nombre' => 'Dibujo Constructivo'],
			['clave' => 'F1211', 'nombre' => 'Matemáticas'],
			['clave' => 'F1212', 'nombre' => 'Fundamento de Electricidad y Magnetismo'],
			['clave' => 'F1213', 'nombre' => 'Principios de Termodinámica'],
			['clave' => 'F1214', 'nombre' => 'Mecánica de Materiales'],
			['clave' => 'F1215', 'nombre' => 'Análisis Estructural'],
			['clave' => 'F1216', 'nombre' => 'Diseño de Estructuras de Concreto Reforzado'],
			['clave' => 'F1217', 'nombre' => 'Diseño de Estructuras de Acero'],
			['clave' => 'F1218', 'nombre' => 'Administración de Obras de Ingeniería'],
			['clave' => 'F1219', 'nombre' => 'Presupuestos y Programación'],
			['clave' => 'F1220', 'nombre' => 'Tecnología del Concreto'],
			['clave' => 'F1221', 'nombre' => 'Instalaciones en Edificación'],
			['clave' => 'F1222', 'nombre' => 'Supervisión y Control de Obras'],
			['clave' => 'F1223', 'nombre' => 'Geología'],
			['clave' => 'F1224', 'nombre' => 'Comportamiento de Suelos y Laboratorio'],
			['clave' => 'F1225', 'nombre' => 'Geotecnia Teórica'],
			['clave' => 'F1226', 'nombre' => 'Goetecnia Aplicada'],
			['clave' => 'F1227', 'nombre' => 'Topografía Básica'],
			['clave' => 'F1228', 'nombre' => 'Topografía Aplicada'],
			['clave' => 'F1229', 'nombre' => 'Vías Terrestres'],
			['clave' => 'F1230', 'nombre' => 'Pavimentos'],
			['clave' => 'F1231', 'nombre' => 'Hidráulica Básica y Laboratorio'],
			['clave' => 'F1232', 'nombre' => 'Hidráulica de Tuberías y Laboratorio'],
			['clave' => 'F1233', 'nombre' => 'Hidráulica de Canales y Laboratorio'],
			['clave' => 'F1235', 'nombre' => 'Hidráulica Fluvial'],
			['clave' => 'F1236', 'nombre' => 'Diseño Estructural Asistido por Computadora'],
			['clave' => 'F1237', 'nombre' => 'Diseño de la Estructura de Mampostería'],
			['clave' => 'F1238', 'nombre' => 'Diseño Avanzado de Concreto Reforzado'],
			['clave' => 'F1239', 'nombre' => 'Maquinaría y Equipo de Construcción Pesada'],
			['clave' => 'F1240', 'nombre' => 'Evaluación de Proyecto'],
			['clave' => 'F1241', 'nombre' => 'Investigación de Operaciones'],
			['clave' => 'F1242', 'nombre' => 'Temas Selectos de Geotecnia'],
			['clave' => 'F1243', 'nombre' => 'Geotecnia Aplicada las Vias Terrestres'],
			['clave' => 'F1244', 'nombre' => 'Puentes'],
			['clave' => 'F1245', 'nombre' => 'Ingeniería de Tránsito'],
			['clave' => 'F1246', 'nombre' => 'Obras hidráilicas'],
			['clave' => 'F1247', 'nombre' => 'Abastecimiento de Agua Potable y Alcantarillado'],
			['clave' => 'F1248', 'nombre' => 'Tratamiento de Aguas Residuales'],
			['clave' => 'F1249', 'nombre' => 'Comprensión de Textos en Inglés'],
			['clave' => 'F1250', 'nombre' => 'Recursos y Necesidades de México'],
			['clave' => 'F1301', 'nombre' => 'Algebra y Trigonometría'],
			['clave' => 'F1302', 'nombre' => 'Cálculo Diferencial e Integral'],
			['clave' => 'F1303', 'nombre' => 'Química Inorgánica'],
			['clave' => 'F1304', 'nombre' => 'Química Orgánica'],
			['clave' => 'F1345', 'nombre' => 'Física'],
			['clave' => 'F1401', 'nombre' => 'Prácticas Agrícolas'],
			['clave' => 'F1402', 'nombre' => 'Manejo de Recursos'],
			['clave' => 'F1403', 'nombre' => 'Física'],
			['clave' => 'F1404', 'nombre' => 'Álgebra, Geometría y Trigonometría'],
			['clave' => 'F1405', 'nombre' => 'Formación de Emprendedores'],
			['clave' => 'F1998', 'nombre' => 'Prácticas Profesionales'],
			['clave' => 'F1999', 'nombre' => 'Servicio Social'],
			['clave' => 'F1234', 'nombre' => 'Hidrología'],
			['clave' => 'F1310', 'nombre' => 'Bioestadística'],
		];

		foreach ($materias_array as $materias) 
		{
			$materia = new materias();
			$materia->clave = $materias['clave'];
			$materia->nombre = $materias['nombre'];
			$materia->save();
		}
		
		
    }
}
