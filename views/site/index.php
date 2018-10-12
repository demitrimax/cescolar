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
                    
                    <?= Html::a('<div class="botones btnver1"><h1>Alumnos</h1><p></div></div>', ['/alumnos']) ?> 
                
            
            <div class="col-lg-4">
                <div class="botones btnver2">
                    <a href="#"></a>
                    <h1>Calificaciones</h1><p><b>Texto del boton</b> Con la imagen ocupando toda el área</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="botones btnver3">
                    <a href="#"></a>
                    <h1>Maestros</h1><p><b>Texto del boton</b> Con la imagen ocupando toda el área</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="botones btnver4">
                    <a href="#"></a>
                    <h1>Asignaturas</h1><p><b>Texto del boton</b> Con la imagen ocupando toda el área</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="botones btnver5">
                    <a href="#"></a>
                    <h1>Carreras</h1><p><b>Texto del boton</b> Con la imagen ocupando toda el área</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="botones btnver6">
                    <a href="#"></a>
                    <h1>Grupos</h1><p><b>Texto del boton</b> Con la imagen ocupando toda el área</p>
                </div>
            </div>

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
