<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Carreras */

$this->title = 'Actualizar Carrera: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Carreras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'id' => $model->idcarreras]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="carreras-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
