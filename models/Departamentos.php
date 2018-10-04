<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departamentos".
 *
 * @property int $iddepa
 * @property string $nombre
 * @property string $maestros_idcie
 *
 * @property Maestros $maestrosIdcie
 */
class Departamentos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departamentos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iddepa', 'maestros_idcie'], 'required'],
            [['iddepa'], 'integer'],
            [['nombre'], 'string', 'max' => 35],
            [['maestros_idcie'], 'string', 'max' => 6],
            [['iddepa', 'maestros_idcie'], 'unique', 'targetAttribute' => ['iddepa', 'maestros_idcie']],
            [['maestros_idcie'], 'exist', 'skipOnError' => true, 'targetClass' => Maestros::className(), 'targetAttribute' => ['maestros_idcie' => 'idcie']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iddepa' => 'Iddepa',
            'nombre' => 'Nombre',
            'maestros_idcie' => 'Maestros Idcie',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaestrosIdcie()
    {
        return $this->hasOne(Maestros::className(), ['idcie' => 'maestros_idcie']);
    }
}
