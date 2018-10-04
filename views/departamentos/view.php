<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\departamentos */

$this->title = $model->iddepa;
$this->params['breadcrumbs'][] = ['label' => 'Departamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departamentos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'iddepa' => $model->iddepa, 'maestros_idcie' => $model->maestros_idcie], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'iddepa' => $model->iddepa, 'maestros_idcie' => $model->maestros_idcie], [
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
            'iddepa',
            'nombre',
            'maestros_idcie',
        ],
    ]) ?>

</div>
