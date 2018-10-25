<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "domicilios".
 *
 * @property int $iddom
 * @property string $calle
 * @property string $no
 * @property string $colonia
 * @property string $codpostal
 * @property int $estado_idestado
 *
 * @property AlumnosHasDomicilios[] $alumnosHasDomicilios
 * @property Alumnos[] $alumnosMatriculas
 * @property Estado $estadoIdestado
 * @property DomiciliosHasMaestros[] $domiciliosHasMaestros
 * @property Maestros[] $maestrosIdcies
 */
class Domicilios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'domicilios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iddom', 'estado_idestado', 'idmunicipio'], 'required'],
            [['iddom', 'estado_idestado', 'idmunicipio'], 'integer'],
            [['calle'], 'string', 'max' => 50],
            [['no'], 'string', 'max' => 10],
            [['colonia'], 'string', 'max' => 25],
            [['codpostal'], 'string', 'max' => 5],
            [['iddom', 'estado_idestado'], 'unique', 'targetAttribute' => ['iddom', 'estado_idestado']],
            [['estado_idestado'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['estado_idestado' => 'idedo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iddom'             => 'Id',
            'calle'             => 'Calle',
            'no'                => 'No.',
            'colonia'           => 'Colonia',
            'codpostal'         => 'Código Postal',
            'estado_idestado'   => 'Estado',
            'idmunicipio'       => 'Municipio'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnosHasDomicilios()
    {
        return $this->hasMany(AlumnosHasDomicilios::className(), ['domicilios_iddom' => 'iddom', 'domicilios_estado_idestado' => 'estado_idestado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnosMatriculas()
    {
        return $this->hasMany(Alumnos::className(), ['matricula' => 'alumnos_matricula', 'carreras_idcarreras' => 'alumnos_carreras_idcarreras'])->viaTable('alumnos_has_domicilios', ['domicilios_iddom' => 'iddom', 'domicilios_estado_idestado' => 'estado_idestado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstadoIdestado()
    {
        return $this->hasOne(Estado::className(), ['idedo' => 'estado_idestado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDomiciliosHasMaestros()
    {
        return $this->hasMany(DomiciliosHasMaestros::className(), ['domicilios_iddom' => 'iddom', 'domicilios_estado_idestado' => 'estado_idestado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaestrosIdcies()
    {
        return $this->hasMany(Maestros::className(), ['idcie' => 'maestros_idcie'])->viaTable('domicilios_has_maestros', ['domicilios_iddom' => 'iddom', 'domicilios_estado_idestado' => 'estado_idestado']);
    }
}
