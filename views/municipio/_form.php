<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Municipio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="municipio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idmuni')->textInput() ?>

    <?= $form->field($model, 'nomMunicipio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado_idedo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
