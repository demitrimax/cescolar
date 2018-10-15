<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Calificaciones */

$this->title = 'Update Calificaciones: ' . $model->alumnos_matricula;
$this->params['breadcrumbs'][] = ['label' => 'Calificaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->alumnos_matricula, 'url' => ['view', 'id' => $model->alumnos_matricula]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="calificaciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
