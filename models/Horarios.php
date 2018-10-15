<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horarios".
 *
 * @property int $idhorario
 * @property string $horario
 * @property string $dia
 *
 * @property GruposHasHorarios[] $gruposHasHorarios
 * @property Grupos[] $gruposIdclaves
 */
class Horarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'horarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idhorario'], 'required'],
            [['idhorario'], 'integer'],
            [['horario'], 'string', 'max' => 5],
            [['dia'], 'string', 'max' => 10],
            [['idhorario'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idhorario'     => 'Id',
            'horario'       => 'Horario',
            'dia'           => 'Dia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGruposHasHorarios()
    {
        return $this->hasMany(GruposHasHorarios::className(), ['horarios_idhorario' => 'idhorario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGruposIdclaves()
    {
        return $this->hasMany(Grupos::className(), ['idclave' => 'grupos_idclave', 'materias_clave' => 'grupos_materias_clave', 'cicloescolar_periodo' => 'grupos_cicloescolar_periodo', 'maestros_idcie' => 'grupos_maestros_idcie'])->viaTable('grupos_has_horarios', ['horarios_idhorario' => 'idhorario']);
    }
}
