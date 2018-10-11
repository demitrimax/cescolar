<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Calificaciones */

$this->title = 'Alta de Califiaciones';
$this->params['breadcrumbs'][] = ['label' => 'Calificaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calificaciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
