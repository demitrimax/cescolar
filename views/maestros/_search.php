<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MaestrosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="maestros-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcie') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'apellidopat') ?>

    <?= $form->field($model, 'apellidomat') ?>

    <?= $form->field($model, 'curp') ?>

    <?php // echo $form->field($model, 'genero') ?>

    <?php // echo $form->field($model, 'telfijo') ?>

    <?php // echo $form->field($model, 'cell') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
