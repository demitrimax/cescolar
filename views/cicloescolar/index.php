<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CicloescolarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cicloescolars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cicloescolar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cicloescolar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'periodo',
            'fechain',
            'fechafin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
