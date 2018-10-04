<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Maestros */

$this->title = 'Update Maestros: ' . $model->idcie;
$this->params['breadcrumbs'][] = ['label' => 'Maestros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcie, 'url' => ['view', 'id' => $model->idcie]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maestros-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
