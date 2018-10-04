<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Alumnos */

$this->title = $model->matricula;
$this->params['breadcrumbs'][] = ['label' => 'Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumnos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'matricula' => $model->matricula, 'carreras_idcarreras' => $model->carreras_idcarreras], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'matricula' => $model->matricula, 'carreras_idcarreras' => $model->carreras_idcarreras], [
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
            'matricula',
            'nombre',
            'apellidopat',
            'apellidomat',
            'curp',
            'genero',
            'telfijo',
            'cell',
            'email:email',
            'fechains',
            'nss',
            'contacto',
            'status_idstatus',
            'carreras_idcarreras',
        ],
    ]) ?>

</div>
