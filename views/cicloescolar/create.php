<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cicloescolar */

$this->title = 'Alta de Ciclo Escolar';
$this->params['breadcrumbs'][] = ['label' => 'Cicloescolars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cicloescolar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
