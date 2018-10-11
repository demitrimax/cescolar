<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Ha ocurrido un error mientras el servidor procesaba su petición.
    </p>
    <p>
        Porfavor pongase en contacto si cree que es un error del servidor. Gracias.
    </p>

</div>
