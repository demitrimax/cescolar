<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cicloescolar */

$this->title = 'Actualizar Ciclo Escolar: ' . $model->periodo;
$this->params['breadcrumbs'][] = ['label' => 'Ciclo Escolar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->periodo, 'url' => ['view', 'id' => $model->periodo]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="cicloescolar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
