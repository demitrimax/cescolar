<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Domicilios */

$this->title = 'Update Domicilios: ' . $model->iddom;
$this->params['breadcrumbs'][] = ['label' => 'Domicilios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iddom, 'url' => ['view', 'iddom' => $model->iddom, 'estado_idestado' => $model->estado_idestado]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="domicilios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
