<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\departamentos */

$this->title = 'Alta de Departamento';
$this->params['breadcrumbs'][] = ['label' => 'Departamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departamentos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
