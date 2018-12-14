<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlumnosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alumnos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumnos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  // echo $this->render('_search', ['model' => $searchModel]); ?>


    <p>
        <?= Html::a('Alta de Alumnos', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Reporte de Alumnos', ['reporte'], ['class' => 'btn btn-warning']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'matricula',
            'nombre',
            'apellidopat',
            'apellidomat',
            'curp',
            'nombrecompleto',
            //'genero',
            //'telfijo',
            //'cell',
            //'email:email',
            //'fechains',
            //'nss',
            //'contacto',
            //'status_idstatus',
            //'carreras_idcarreras',
            'calificaciones2',
            'promedio',
            ['class' => 'yii\grid\ActionColumn',

                'template'=>'{view}{delete}{update}{reportealumno}',

                'buttons'=>[
                    'reportealumno' => function ($url, $model) { 
                        return Html::a('<span><i class="glyphicon glyphicon-print"></span>', $url, ['title' => Yii::t('yii', 'Reporte'), 'target' => '_blank', 'class' => 'btn btn-primary' ]);
                    },
                    'view' => function ($url, $model) { 
                        return Html::a('<span><i class="glyphicon glyphicon-eye-open"></span>', $url, ['title' => Yii::t('yii', 'Ver detalles'), 'target' => '_blank', 'class' => 'btn btn-warning' ]);
                    },
                    'delete' => function ($url, $model) { 
                        return Html::a('<span><i class="glyphicon glyphicon-trash"></span>', $url, ['title' => Yii::t('yii', 'Ver detalles'), 'target' => '_blank', 'class' => 'btn btn-danger' ]);
                    },
                ]                 
            ],         
            
            //['class' => 'yii\grid\ActionColumn'],
           /*[
                'label'=>'Reporte',
                'format' => 'raw', 
                'value' => function ($model) {
                    return Html::a('<i class="glyphicon glyphicon-print"></i>',['reportealumno','matricula'=>$model->matricula,'carreras_idcarreras'=>$model->carreras_idcarreras],['class'=>'btn btn-primary', 'target'=>'_blank']);
                }
            ]*/
        ],
    ]); ?>
</div>
