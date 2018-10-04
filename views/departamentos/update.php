<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\departamentos */

$this->title = 'Update Departamentos: ' . $model->iddepa;
$this->params['breadcrumbs'][] = ['label' => 'Departamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iddepa, 'url' => ['view', 'iddepa' => $model->iddepa, 'maestros_idcie' => $model->maestros_idcie]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="departamentos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
