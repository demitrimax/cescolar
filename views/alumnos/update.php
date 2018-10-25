<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Alumnos */

$this->title = 'Actualizar alumno: ' . $model->nombre." ".$model->apellidopat." ".$model->apellidomat;
$this->params['breadcrumbs'][] = ['label' => 'Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->matricula, 'url' => ['view', 'matricula' => $model->matricula, 'carreras_idcarreras' => $model->carreras_idcarreras]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="alumnos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
