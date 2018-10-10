<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carreras".
 *
 * @property int $idcarreras
 * @property string $nombre
 *
 * @property Alumnos[] $alumnos
 */
class Carreras extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carreras';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idcarreras'], 'required'],
            [['idcarreras'], 'integer'],
            [['nombre'], 'string', 'max' => 55],
            [['idcarreras'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcarreras' => 'Idcarreras',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnos()
    {
        return $this->hasMany(Alumnos::className(), ['carreras_idcarreras' => 'idcarreras']);
    }
}
