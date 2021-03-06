<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Alumnos */

$this->title = $model->nombre.' '.$model->apellidopat.' '.$model->apellidomat;
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
            //'genero',
            [ 'attribute' => 'genero',
                'value' => function ($model) {
                    return $model->genero == 'M'? 'Masculino' : 'Femenino';
                },

            ],
            'telfijo',
            'cell',
            'email:email',
            'fechains',
            'nss',
            'contacto',
            //'status_idstatus',
            [ 'attribute' => 'status_idstatus',
                'value' => function ($model) {
                    return $model->status_idstatus == 1? 'Activo' : 'No Activo';
                },

            ],
            //'carreras_idcarreras',
            [ 'attribute' => 'carreras_idcarreras',
                'value' => function ($model) {
                    //OBTIENE EL NOMBRE DE LA CARRERA DE LA BASE DE DATOS
                    /*
                    $carrera = \app\models\Carreras::findOne($model->carreras_idcarreras);
                    //var_dump($carrera);
                    //var_dump($model->carreras_idcarreras);
                    return $carrera->nombre;
                    */
                    // Este dato lo obtiene de la funcion getCarreras en el modelo de alumnos
                    return $model->carrera->nombre;
                },

            ],
        ],
    ]) ?>

     <?= Html::a('Agregar Dirección', ['domicilios/create'], ['class' => 'btn btn-success']) ?>
     <?= Html::a('Versión PDF', ['reportealumno','matricula'=>$model->matricula,'carreras_idcarreras' =>$model->carreras_idcarreras], ['class' => 'btn btn-warning','target' =>'_blank']) ?>


</div>
