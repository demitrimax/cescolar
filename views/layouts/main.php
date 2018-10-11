<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Principal', 'url' => ['/site/index']],
            ['label' => 'Acerca de', 'url' => ['/site/about']],
            ['label' => 'Contacto', 'url' => ['/site/contact']],
            [
                'label' => 'Componentes',
                'items' => [
                    ['label' => 'Maestros', 'url' => ['/maestros']],
                    ['label' => 'Alumnos', 'url' => ['/alumnos']],
                    ['label' => 'Carreras', 'url' => ['/carreras']],
                    ['label' => 'Materias', 'url' => ['/materias']],
                    ['label' => 'Calificaciones', 'url' => ['/calificaciones']],
                    ['label' => 'Grupos', 'url' => ['/grupos']],
                ],
            ], 
            Yii::$app->user->isGuest ? (
                ['label' => 'Iniciar Sesión', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Cerrar Sesión(' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left"><a href="http://itvillahermosa.edu.mx/">&copy; Instituo Tecnológico de Villahermosa <?= date('Y') ?></a></p>

        <p class="pull-right"><a href="http://www.tecnm.mx/">Tecnoloógico Nacional de México</a></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
