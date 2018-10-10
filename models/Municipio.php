<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "municipio".
 *
 * @property int $idmuni
 * @property string $nomMunicipio
 * @property int $estado_idedo
 *
 * @property Estado $estadoIdedo
 */
class Municipio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'municipio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idmuni', 'nomMunicipio', 'estado_idedo'], 'required'],
            [['idmuni', 'estado_idedo'], 'integer'],
            [['nomMunicipio'], 'string', 'max' => 55],
            [['idmuni', 'estado_idedo'], 'unique', 'targetAttribute' => ['idmuni', 'estado_idedo']],
            [['estado_idedo'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['estado_idedo' => 'idedo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idmuni' => 'Idmuni',
            'nomMunicipio' => 'Nom Municipio',
            'estado_idedo' => 'Estado Idedo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstadoIdedo()
    {
        return $this->hasOne(Estado::className(), ['idedo' => 'estado_idedo']);
    }
}
