<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Aplicación de Control Escolar';

$nivel =\app\models\User::findIdentity(Yii::$app->user->id)->nivel;
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
                    <?= Html::a('<div class="botones btnver1"><h1>Alumnos</h1></div>', ['/alumnos']) ?> 
            </div>
            <div class="col-lg-4">
                    <?= Html::a('<div class="botones btnver2"><h1>Calificaciones</h1></div>', ['/calificaciones']) ?>
            </div>
            <div class="col-lg-4">
                    <?= Html::a('<div class="botones btnver3"><h1>Maestros</h1></div>', ['/maestros']) ?>
            </div>
            <?php if($nivel=='otro'||$nivel=='admin') { ?>
            <div class="col-lg-4">
                    <?= Html::a('<div class="botones btnver4"><h1>Materias</h1></div>', ['/materias']) ?>
            </div>

            <div class="col-lg-4">
                <?= Html::a('<div class="botones btnver5"><h1>Carreras</h1></div>', ['/carreras']) ?>
            </div>

            <div class="col-lg-4">
                <?= Html::a('<div class="botones btnver6"><h1>Grupos</h1></div>', ['/grupos']) ?>
            </div>
            <?php } ?>
            <?php if($nivel=='jefe'||$nivel=='admin') { ?>
            <div class="col-lg-4">
                <?= Html::a('<div class="botones btnver7"><h1>Deptos</h1></div>', ['/departamentos']) ?>
            </div>

            <div class="col-lg-4">
                <?= Html::a('<div class="botones btnver8"><h1>Horarios</h1></div>', ['/horarios']) ?>
            </div>
            <div class="col-lg-4">
                <?= Html::a('<div class="botones btnver9"><h1>Ciclo Escolar</h1></div>', ['/cicloescolar']) ?>
            </div>
        <?php } ?>

    </div>
</div>
