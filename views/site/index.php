<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Sistema de Control Escolar</h1>

        <p class="lead">Mini aplicación de Control Escolar.</p>

        <p><?= Html::a('Alumnos', ['/alumnos'], ['class' => 'btn btn-lg btn-success']) ?>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Maestros</h2>

                <p>Lista detallada de la lista de maestros en la base de datos.</p>

                <p><?= Html::a('Base Maestros &raquo;', ['/maestros'], ['class' => 'btn btn-default']) ?></p>
            </div>
            <div class="col-lg-4">
                <h2>Alumnos</h2>

                <p>Lista de la base de datos de los alumnos registrados.</p>
                <p><?= Html::a('Alumnos &raquo;', ['/alumnos'], ['class' => 'btn btn-default']) ?></p>
            </div>
            <div class="col-lg-4">
                <h2>Carreras</h2>

                <p>Listado de las carreras que se tienen actualmente.</p>
                <p><?= Html::a('Carreras &raquo;', ['/carreras'], ['class' => 'btn btn-default']) ?></p>
            </div>
        </div>

    </div>
</div>
