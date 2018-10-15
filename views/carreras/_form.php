<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Carreras */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carreras-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idcarreras')->textInput() ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
