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
        <?= Html::a('Actualizar', ['update', 'matricula' => $model->matricula, 'carreras_idcarreras' => $model->carreras_idcarreras], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'matricula' => $model->matricula, 'carreras_idcarreras' => $model->carreras_idcarreras], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta seguro de eliminar al Alumno: '.$model->nombre.' '.$model->apellidopat.'?',
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
