<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MaestrosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Maestros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maestros-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Maestros', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcie',
            'nombre',
            'apellidopat',
            'apellidomat',
            'curp',
            //'genero',
            //'telfijo',
            //'cell',
            //'email:email',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
