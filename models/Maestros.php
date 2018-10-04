<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maestros".
 *
 * @property string $idcie
 * @property string $nombre
 * @property string $apellidopat
 * @property string $apellidomat
 * @property string $curp
 * @property string $genero
 * @property string $telfijo
 * @property string $cell
 * @property string $email
 * @property string $status
 *
 * @property Departamentos[] $departamentos
 * @property DomiciliosHasMaestros[] $domiciliosHasMaestros
 * @property Domicilios[] $domiciliosIddoms
 * @property Grupos[] $grupos
 */
class Maestros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maestros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idcie', 'nombre', 'apellidopat', 'apellidomat', 'curp', 'genero', 'email'], 'required'],
            [['genero', 'status'], 'string'],
            [['idcie'], 'string', 'max' => 6],
            [['nombre', 'apellidopat', 'apellidomat', 'email'], 'string', 'max' => 35],
            [['curp'], 'string', 'max' => 16],
            [['telfijo', 'cell'], 'string', 'max' => 10],
            [['idcie'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcie' => 'Idcie',
            'nombre' => 'Nombre',
            'apellidopat' => 'Apellidopat',
            'apellidomat' => 'Apellidomat',
            'curp' => 'Curp',
            'genero' => 'Genero',
            'telfijo' => 'Telfijo',
            'cell' => 'Cell',
            'email' => 'Email',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamentos()
    {
        return $this->hasMany(Departamentos::className(), ['maestros_idcie' => 'idcie']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDomiciliosHasMaestros()
    {
        return $this->hasMany(DomiciliosHasMaestros::className(), ['maestros_idcie' => 'idcie']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDomiciliosIddoms()
    {
        return $this->hasMany(Domicilios::className(), ['iddom' => 'domicilios_iddom', 'estado_idestado' => 'domicilios_estado_idestado'])->viaTable('domicilios_has_maestros', ['maestros_idcie' => 'idcie']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupos()
    {
        return $this->hasMany(Grupos::className(), ['maestros_idcie' => 'idcie']);
    }
}
