<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Alumnos */

$this->title = $model->nombrecompleto;
$this->params['breadcrumbs'][] = ['label' => 'Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumnos-view">

    <h1><?= Html::encode($this->title) ?></h1>

   <div class="container">          
  <table id="w0" class="table table-striped table-bordered detail-view">
    <tr><th>Matrícula</th><td><?= $model->matricula ?></td></tr>
    <tr><th>Nombre</th><td><?= $model->nombrecompleto ?></td></tr>
    <tr><th>CURP</th><td><?= $model->curp ?></td></tr>
    <tr><th>Género</th><td><?= $model->genero ?></td></tr>
    <tr><th>Teléfono Fijo</th><td>9936086371</td></tr>
    <tr><th>Teléfono Celular</th><td>9936033668</td></tr>
    <tr><th>Email</th><td>yanderson@gmail.com</td></tr>
    <tr><th>Fecha de Inscripción</th><td>1985-08-10</td></tr>
    <tr><th>NSS</th><td>4213619424228</td></tr>
    <tr><th>Contacto</th><td>Dr. Filiberto Crooks IV</td></tr>
    <tr><th>Estatus</th><td>Activo</td></tr>
    <tr><th>Carrera</th><td>Ingeniería Química</td></tr></table>
</div>

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


</div>
