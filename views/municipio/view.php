<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Municipio */

$this->title = $model->idmuni;
$this->params['breadcrumbs'][] = ['label' => 'Municipios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="municipio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idmuni' => $model->idmuni, 'estado_idedo' => $model->estado_idedo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idmuni' => $model->idmuni, 'estado_idedo' => $model->estado_idedo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idmuni',
            'nomMunicipio',
            'estado_idedo',
        ],
    ]) ?>

</div>
