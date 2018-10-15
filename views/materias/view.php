<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Materias */

$this->title = $model->clave;
$this->params['breadcrumbs'][] = ['label' => 'Materias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materias-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->clave], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->clave], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta usted seguro de elminar la materia: '.$model->nombre.'?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'clave',
            'nombre',
        ],
    ]) ?>

</div>
