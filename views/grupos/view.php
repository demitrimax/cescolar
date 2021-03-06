<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Grupos */

$this->title = $model->idclave;
$this->params['breadcrumbs'][] = ['label' => 'Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grupos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'idclave' => $model->idclave, 'materias_clave' => $model->materias_clave, 'cicloescolar_periodo' => $model->cicloescolar_periodo, 'maestros_idcie' => $model->maestros_idcie], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'idclave' => $model->idclave, 'materias_clave' => $model->materias_clave, 'cicloescolar_periodo' => $model->cicloescolar_periodo, 'maestros_idcie' => $model->maestros_idcie], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta seguro de eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idclave',
            'materias_clave',
            'cicloescolar_periodo',
            'maestros_idcie',
        ],
    ]) ?>

</div>
