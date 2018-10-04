<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cicloescolar".
 *
 * @property string $periodo
 * @property string $fechain
 * @property string $fechafin
 *
 * @property Grupos[] $grupos
 */
class Cicloescolar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cicloescolar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['periodo'], 'required'],
            [['fechain', 'fechafin'], 'safe'],
            [['periodo'], 'string', 'max' => 10],
            [['periodo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'periodo' => 'Periodo',
            'fechain' => 'Fechain',
            'fechafin' => 'Fechafin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupos()
    {
        return $this->hasMany(Grupos::className(), ['cicloescolar_periodo' => 'periodo']);
    }
}
