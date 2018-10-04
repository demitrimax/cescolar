<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Grupos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grupos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idclave')->textInput() ?>

    <?= $form->field($model, 'materias_clave')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cicloescolar_periodo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maestros_idcie')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
