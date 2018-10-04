<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupos".
 *
 * @property int $idclave
 * @property string $materias_clave
 * @property string $cicloescolar_periodo
 * @property string $maestros_idcie
 *
 * @property AlumnosHasGrupos[] $alumnosHasGrupos
 * @property Alumnos[] $alumnosMatriculas
 * @property Cicloescolar $cicloescolarPeriodo
 * @property Maestros $maestrosIdcie
 * @property Materias $materiasClave
 * @property GruposHasHorarios[] $gruposHasHorarios
 * @property Horarios[] $horariosIdhorarios
 */
class Grupos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grupos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idclave', 'materias_clave', 'cicloescolar_periodo', 'maestros_idcie'], 'required'],
            [['idclave'], 'integer'],
            [['materias_clave'], 'string', 'max' => 7],
            [['cicloescolar_periodo'], 'string', 'max' => 10],
            [['maestros_idcie'], 'string', 'max' => 6],
            [['idclave', 'materias_clave', 'cicloescolar_periodo', 'maestros_idcie'], 'unique', 'targetAttribute' => ['idclave', 'materias_clave', 'cicloescolar_periodo', 'maestros_idcie']],
            [['cicloescolar_periodo'], 'exist', 'skipOnError' => true, 'targetClass' => Cicloescolar::className(), 'targetAttribute' => ['cicloescolar_periodo' => 'periodo']],
            [['maestros_idcie'], 'exist', 'skipOnError' => true, 'targetClass' => Maestros::className(), 'targetAttribute' => ['maestros_idcie' => 'idcie']],
            [['materias_clave'], 'exist', 'skipOnError' => true, 'targetClass' => Materias::className(), 'targetAttribute' => ['materias_clave' => 'clave']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idclave' => 'Idclave',
            'materias_clave' => 'Materias Clave',
            'cicloescolar_periodo' => 'Cicloescolar Periodo',
            'maestros_idcie' => 'Maestros Idcie',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnosHasGrupos()
    {
        return $this->hasMany(AlumnosHasGrupos::className(), ['grupos_idclave' => 'idclave', 'grupos_materias_clave' => 'materias_clave', 'grupos_cicloescolar_periodo' => 'cicloescolar_periodo', 'grupos_maestros_idcie' => 'maestros_idcie']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnosMatriculas()
    {
        return $this->hasMany(Alumnos::className(), ['matricula' => 'alumnos_matricula', 'carreras_idcarreras' => 'alumnos_carreras_idcarreras'])->viaTable('alumnos_has_grupos', ['grupos_idclave' => 'idclave', 'grupos_materias_clave' => 'materias_clave', 'grupos_cicloescolar_periodo' => 'cicloescolar_periodo', 'grupos_maestros_idcie' => 'maestros_idcie']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCicloescolarPeriodo()
    {
        return $this->hasOne(Cicloescolar::className(), ['periodo' => 'cicloescolar_periodo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaestrosIdcie()
    {
        return $this->hasOne(Maestros::className(), ['idcie' => 'maestros_idcie']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMateriasClave()
    {
        return $this->hasOne(Materias::className(), ['clave' => 'materias_clave']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGruposHasHorarios()
    {
        return $this->hasMany(GruposHasHorarios::className(), ['grupos_idclave' => 'idclave', 'grupos_materias_clave' => 'materias_clave', 'grupos_cicloescolar_periodo' => 'cicloescolar_periodo', 'grupos_maestros_idcie' => 'maestros_idcie']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHorariosIdhorarios()
    {
        return $this->hasMany(Horarios::className(), ['idhorario' => 'horarios_idhorario'])->viaTable('grupos_has_horarios', ['grupos_idclave' => 'idclave', 'grupos_materias_clave' => 'materias_clave', 'grupos_cicloescolar_periodo' => 'cicloescolar_periodo', 'grupos_maestros_idcie' => 'maestros_idcie']);
    }
}
