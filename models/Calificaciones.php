<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "calificaciones".
 *
 * @property int $parcial
 * @property int $promedio
 * @property string $alumnos_matricula
 *
 * @property Alumnos $alumnosMatricula
 */
class Calificaciones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calificaciones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parcial', 'promedio'], 'integer'],
            [['alumnos_matricula'], 'required'],
            [['alumnos_matricula'], 'string', 'max' => 20],
            [['alumnos_matricula'], 'unique'],
            [['alumnos_matricula'], 'exist', 'skipOnError' => true, 'targetClass' => Alumnos::className(), 'targetAttribute' => ['alumnos_matricula' => 'matricula']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'parcial'           => 'Parcial',
            'promedio'          => 'Promedio',
            'alumnos_matricula' => 'Matricula Alumno',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnosMatricula()
    {
        return $this->hasOne(Alumnos::className(), ['matricula' => 'alumnos_matricula']);
    }
}
