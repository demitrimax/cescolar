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

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Base Maestros &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Alumnos</h2>

                <p>Lista de la base de datos de los alumnos registrados.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
