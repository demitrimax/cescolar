<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Horarios */

$this->title = 'Update Horarios: ' . $model->idhorario;
$this->params['breadcrumbs'][] = ['label' => 'Horarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idhorario, 'url' => ['view', 'id' => $model->idhorario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="horarios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
