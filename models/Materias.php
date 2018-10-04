<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materias".
 *
 * @property string $clave
 * @property string $nombre
 *
 * @property Grupos[] $grupos
 */
class Materias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clave'], 'required'],
            [['clave'], 'string', 'max' => 7],
            [['nombre'], 'string', 'max' => 150],
            [['clave'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'clave' => 'Clave',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupos()
    {
        return $this->hasMany(Grupos::className(), ['materias_clave' => 'clave']);
    }
}
