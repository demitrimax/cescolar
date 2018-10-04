<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Municipio */

$this->title = 'Update Municipio: ' . $model->idmuni;
$this->params['breadcrumbs'][] = ['label' => 'Municipios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idmuni, 'url' => ['view', 'idmuni' => $model->idmuni, 'estado_idedo' => $model->estado_idedo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="municipio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
