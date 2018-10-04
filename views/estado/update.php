<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\estado */

$this->title = 'Update Estado: ' . $model->idedo;
$this->params['breadcrumbs'][] = ['label' => 'Estados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idedo, 'url' => ['view', 'id' => $model->idedo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
