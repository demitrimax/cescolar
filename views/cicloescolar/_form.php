<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cicloescolar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cicloescolar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'periodo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fechain')->textInput() ?> 

    <?= $form->field($model, 'fechafin')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
