<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlumnosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumnos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'matricula') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'apellidopat') ?>

    <?= $form->field($model, 'apellidomat') ?>

    <?= $form->field($model, 'curp') ?>

    <?php // echo $form->field($model, 'genero') ?>

    <?php // echo $form->field($model, 'telfijo') ?>

    <?php // echo $form->field($model, 'cell') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'fechains') ?>

    <?php // echo $form->field($model, 'nss') ?>

    <?php // echo $form->field($model, 'contacto') ?>

    <?php // echo $form->field($model, 'status_idstatus') ?>

    <?php // echo $form->field($model, 'carreras_idcarreras') ?>

    <div class="form-group">
        <?= Html::submitButton('Burcar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
