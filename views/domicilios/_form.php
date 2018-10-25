<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\estado;
use app\models\municipio;

/* @var $this yii\web\View */
/* @var $model app\models\Domicilios */
/* @var $form yii\widgets\ActiveForm */

$estados = ArrayHelper::map(estado::find()->all(), 'idedo', 'nombredo');

?>

<div class="domicilios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'iddom')->textInput() ?>

    <?= $form->field($model, 'calle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'colonia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codpostal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado_idestado')->dropDownList($estados, ['prompt' => 'Seleccione un estado', 'onChange'=>'
        $.post("/municipio/municipios?estado="+$(this).val(),
        function (data) {
            $("select#idmunicipio").html( data );
        }
        );
        ']) ?>

    <?= $form->field($model, 'idmunicipio')->dropDownList(['prompt' => 'Seleccione un municipio']) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
