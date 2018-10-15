<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Horarios */

$this->title = 'Actualizar Horarios: ' . $model->idhorario;
$this->params['breadcrumbs'][] = ['label' => 'Horarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idhorario, 'url' => ['view', 'id' => $model->idhorario]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="horarios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
