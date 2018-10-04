<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estado".
 *
 * @property int $idedo
 * @property string $nombredo
 *
 * @property Domicilios[] $domicilios
 * @property Municipio[] $municipios
 */
class Estado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idedo', 'nombredo'], 'required'],
            [['idedo'], 'integer'],
            [['nombredo'], 'string', 'max' => 18],
            [['idedo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idedo' => 'Idedo',
            'nombredo' => 'Nombredo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDomicilios()
    {
        return $this->hasMany(Domicilios::className(), ['estado_idestado' => 'idedo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunicipios()
    {
        return $this->hasMany(Municipio::className(), ['estado_idedo' => 'idedo']);
    }
}
