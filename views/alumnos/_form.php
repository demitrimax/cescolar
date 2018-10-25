<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\carreras;

$carreras = ArrayHelper::map(carreras::find()->all(), 'idcarreras', 'nombre');
/* @var $this yii\web\View */
/* @var $model app\models\Alumnos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumnos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'matricula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidopat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidomat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'curp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genero')->dropDownList([ 'F' => 'Femenino', 'M' => 'Masculino', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'telfijo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cell')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fechains')->textInput() ?>

    <?= $form->field($model, 'nss')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contacto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_idstatus')->dropDownList([ '1' => 'Activo', '0' => 'Inactivo', ], ['prompt' => '']) ?>
    
    <?= $form->field($model, 'carreras_idcarreras')->dropDownList($carreras, ['prompt' => 'Seleccione una carrera']) ?>
    <!--
    <?= $form->field($model, 'carreras_idcarreras')->textInput(['list' => 'carreras']) ?>
    <datalist id='carreras'>
        <?php foreach ($carreras as $key => $value): ?>
            <option data-value="<?= $key ?>"> <?= $value ?></option> 
            <?php endforeach ?>
    </datalist>
    -->
    <div class="form-group">
        <?= Html::submitButton('Guardar Alumno', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script type="text/javascript">
    $(function(){
    $('#carreras_idcarreas').change(function(){
        console.log($('#carreras_idcarreas').val();
        console.log($('#carreras_idcarreas option[value=' + $('#input').val() + ']').attr('id'));
    });
});
</script>