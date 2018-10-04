<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DomiciliosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="domicilios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'iddom') ?>

    <?= $form->field($model, 'calle') ?>

    <?= $form->field($model, 'no') ?>

    <?= $form->field($model, 'colonia') ?>

    <?= $form->field($model, 'codpostal') ?>

    <?php // echo $form->field($model, 'estado_idestado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
