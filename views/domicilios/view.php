<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Domicilios */

$this->title = $model->iddom;
$this->params['breadcrumbs'][] = ['label' => 'Domicilios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="domicilios-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'iddom' => $model->iddom, 'estado_idestado' => $model->estado_idestado], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'iddom' => $model->iddom, 'estado_idestado' => $model->estado_idestado], [
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
            'iddom',
            'calle',
            'no',
            'colonia',
            'codpostal',
            'estado_idestado',
        ],
    ]) ?>

</div>
