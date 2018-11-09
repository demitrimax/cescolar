<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumnos".
 *
 * @property string $matricula
 * @property string $nombre
 * @property string $apellidopat
 * @property string $apellidomat
 * @property string $curp
 * @property string $genero
 * @property string $telfijo
 * @property string $cell
 * @property string $email
 * @property string $fechains
 * @property string $nss
 * @property string $contacto
 * @property int $status_idstatus
 * @property int $carreras_idcarreras
 *
 * @property Carreras $carrerasIdcarreras
 * @property AlumnosHasDomicilios[] $alumnosHasDomicilios
 * @property Domicilios[] $domiciliosIddoms
 * @property AlumnosHasGrupos[] $alumnosHasGrupos
 * @property Grupos[] $gruposIdclaves
 * @property Calificaciones $calificaciones
 */
class Alumnos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alumnos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['matricula', 'nombre', 'apellidopat', 'curp', 'genero', 'fechains', 'status_idstatus', 'carreras_idcarreras'], 'required'],
            [['genero'], 'string'],
            [['fechains'], 'safe'],
            [['status_idstatus', 'carreras_idcarreras'], 'integer'],
            [['matricula', 'telfijo', 'cell'], 'string', 'max' => 10],
            [['nombre', 'apellidopat', 'apellidomat', 'email'], 'string', 'max' => 35],
            [['curp'], 'string', 'max' => 16],
            [['nss'], 'string', 'max' => 15],
            [['contacto'], 'string', 'max' => 100],
            [['matricula', 'carreras_idcarreras'], 'unique', 'targetAttribute' => ['matricula', 'carreras_idcarreras']],
            [['carreras_idcarreras'], 'exist', 'skipOnError' => true, 'targetClass' => Carreras::className(), 'targetAttribute' => ['carreras_idcarreras' => 'idcarreras']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'matricula'                 => 'Matrícula',
            'nombre'                    => 'Nombre',
            'apellidopat'               => 'Apellido Paterno',
            'apellidomat'               => 'Apellido Materno',
            'curp'                      => 'CURP',
            'genero'                    => 'Género',
            'telfijo'                   => 'Teléfono Fijo',
            'cell'                      => 'Teléfono Celular',
            'email'                     => 'Email',
            'fechains'                  => 'Fecha de Inscripción',
            'nss'                       => 'NSS',
            'contacto'                  => 'Contacto',
            'status_idstatus'           => 'Estatus',
            'carreras_idcarreras'       => 'Carrera',
            'nombrecompleto'            => 'Nombre Completo',
        ];
    }
   

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarrerasIdcarreras()
    {
        return $this->hasOne(Carreras::className(), ['idcarreras' => 'carreras_idcarreras']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnosHasDomicilios()
    {
        return $this->hasMany(AlumnosHasDomicilios::className(), ['alumnos_matricula' => 'matricula', 'alumnos_carreras_idcarreras' => 'carreras_idcarreras']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDomiciliosIddoms()
    {
        return $this->hasMany(Domicilios::className(), ['iddom' => 'domicilios_iddom', 'estado_idestado' => 'domicilios_estado_idestado'])->viaTable('alumnos_has_domicilios', ['alumnos_matricula' => 'matricula', 'alumnos_carreras_idcarreras' => 'carreras_idcarreras']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnosHasGrupos()
    {
        return $this->hasMany(AlumnosHasGrupos::className(), ['alumnos_matricula' => 'matricula', 'alumnos_carreras_idcarreras' => 'carreras_idcarreras']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGruposIdclaves()
    {
        return $this->hasMany(Grupos::className(), ['idclave' => 'grupos_idclave', 'materias_clave' => 'grupos_materias_clave', 'cicloescolar_periodo' => 'grupos_cicloescolar_periodo', 'maestros_idcie' => 'grupos_maestros_idcie'])->viaTable('alumnos_has_grupos', ['alumnos_matricula' => 'matricula', 'alumnos_carreras_idcarreras' => 'carreras_idcarreras']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCalificaciones()
    {
        return $this->hasOne(Calificaciones::className(), ['alumnos_matricula' => 'matricula']);
    }


     // campo calculado
    public function getNombrecompleto()
    {
        //aqui se concatena el nombre y los apellidos para tener el nombre completo.
        $dato = $this->nombre.' '.$this->apellidopat.' '.$this->apellidomat;
        return $dato; 
    }
    //esto lo estoy agregando para que siempre pueda tener acceso a la carrera
    public function getCarrera()
    {
        return \app\models\Carreras::findOne($this->carreras_idcarreras);;
        //return $carrera->nombre;
    }
    public function getNomgenero()
    {
        return $this->genero == 'M'? 'Masculino' : 'Femenino';
    }
}
