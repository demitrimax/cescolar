<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Maestros */

$this->title = $model->nombre." ".$model->apellidopat." ".$model->apellidomat;
$this->params['breadcrumbs'][] = ['label' => 'Maestros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maestros-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->idcie], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->idcie], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta seguro de eliminar al Maestro: '.$model->nombre.' '.$model->apellidopat.' ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idcie',
            'nombre',
            'apellidopat',
            'apellidomat',
            'curp',
            //'genero',
            [ 'attribute' => 'genero',
                'value' => function ($model) {
                    return $model->genero == 'M'? 'Masculino' : 'Femenino';
                },

            ],
            'telfijo',
            'cell',
            'email:email',
            'status',
        ],
    ]) ?>

</div>
