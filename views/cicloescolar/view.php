<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cicloescolar */

$this->title = $model->periodo;
$this->params['breadcrumbs'][] = ['label' => 'Ciclo Escolar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cicloescolar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->periodo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->periodo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta usted seguro de eliminar este ciclo?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'periodo',
            'fechain',
            'fechafin',
        ],
    ]) ?>

</div>
