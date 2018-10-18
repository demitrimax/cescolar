<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Grupos */

$this->title = 'Actualizar Grupo: ' . $model->idclave;
$this->params['breadcrumbs'][] = ['label' => 'Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idclave, 'url' => ['view', 'idclave' => $model->idclave, 'materias_clave' => $model->materias_clave, 'cicloescolar_periodo' => $model->cicloescolar_periodo, 'maestros_idcie' => $model->maestros_idcie]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="grupos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
