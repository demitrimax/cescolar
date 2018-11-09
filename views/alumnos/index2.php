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
    <img src="../img/alumnos.jpg" width="100">

<table class="table table-striped table-bordered">
    <tr>
        <th>No.</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Género</th>
    </tr>
    <?php 
    //$models = $models->getModels();
    foreach ($models as $key=>$value) { ?>
    <tr>
        <td><?= $key+1 ?></td>
        <td><?= $value->nombrecompleto ?> </td>
        <td><?= $value->email ?></td>
        <td><?= $value->nomgenero ?></td>
    </tr>
<?php } ?>
</table>
</div>
