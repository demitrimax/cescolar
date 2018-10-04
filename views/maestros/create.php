<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Maestros */

$this->title = 'Create Maestros';
$this->params['breadcrumbs'][] = ['label' => 'Maestros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maestros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
