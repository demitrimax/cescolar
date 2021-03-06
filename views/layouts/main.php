<?php
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use yii\debug\Toolbar;
use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use webvimark\modules\UserManagement\components\GhostMenu;
use webvimark\modules\UserManagement\UserManagementModule;
use webvimark\modules\UserManagement\models\User;

// You can use the registerAssetBundle function if you'd like
//$this->registerAssetBundle('app');
AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title><?php echo Html::encode($this->title); ?></title>
<meta property='og:site_name' content='<?php echo Html::encode($this->title); ?>' />
<meta property='og:title' content='<?php echo Html::encode($this->title); ?>' />
<meta property='og:description' content='<?php echo Html::encode($this->title); ?>' />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<link rel='stylesheet' type='text/css' href='<?php echo $this->theme->baseUrl; ?>/files/main_style.css' title='wsite-theme-css' />
<?php $this->head(); ?>
</head>
<body class='wsite-theme-light tall-header-page wsite-page-index weeblypage-index'>
<?php $this->beginBody(); ?>
<div class="header-wrapper">
  <div class="wrapper">
    <div class="title">
      <div id="header-right-wrapper-l">
        <div id="header-right-wrapper-r">
          <table id="header-right">
            <tr>
              <td>
                <div class="search"></div>
                <table>
                  <tr>
                    <td class="phone-number"></td>
                    <td class="social"></td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <span class="titletext">
        <span class='wsite-logo'><a href='/'><span id="wsite-title"><?php echo Html::encode(\Yii::$app->name); ?></span></a></span>
      </span>
      <div class="clear"></div>
    </div>
    <div id="navigation">
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
                        [
                'label' => 'Menú',
                'items' => [
                    
                    ['label' => 'Alumnos', 'url' => ['/alumnos']],
                    ['label' => 'Calificaciones', 'url' => ['/calificaciones']],
                    ['label' => 'Maestros', 'url' => ['/maestros']],
                    ['label' => 'Materias', 'url' => ['/materias']],
                    ['label' => 'Carreras', 'url' => ['/carreras']],
                    ['label' => 'Grupos', 'url' => ['/grupos']],
                    ['label' => 'Departamentos', 'url' => ['/departamentos']],
                    ['label' => 'Horarios', 'url' => ['/horarios']],
                    ['label' => 'Ciclo Escolar', 'url' => ['/cicloescolar']],
                ],
            ],
            ['label' => 'Acerca de', 'url' => ['/site/about']],
            ['label' => 'Contacto', 'url' => ['/site/contact']],
 
            Yii::$app->user->isGuest ? (
                ['label' => 'Iniciar Sesión', 'url' => ['/user-management/auth/login']]
            ) : (
                [
                'encodeLabels'=>false,
                'activateParents'=>true,
                'label' => 'Opciones',
                'items' => [
                            ['label'=>'Login', 'url'=>['/user-management/auth/login']],

                            ['label'=>'CerrarSesión('.Yii::$app->user->identity->username.')' , 'url'=>['/user-management/auth/logout']],
                            ['label'=>'Registration', 'url'=>['/user-management/auth/registration']],
                            ['label'=>'Change own password', 'url'=>['/user-management/auth/change-own-password']],
                            ['label'=>'Password recovery', 'url'=>['/user-management/auth/password-recovery']],
                            ['label'=>'E-mail confirmation', 'url'=>['/user-management/auth/confirm-email']],
                            User::hasPermission($permission, $superAdminAllowed = true) ? ( 
                                 GhostMenu::widget([
                                'encodeLabels'=>false,
                                'activateParents'=>true,
                                'items' => [
                                    [
                                        'label' => 'Administrador',
                                        'items'=>UserManagementModule::menuItems()
                                    ],  ],
                                    ]) ) 
                            : (['label' => ''] ) 
                    ],

        ])
            
        ],
    ]);
    NavBar::end();
       ?></div>
  </div>
</div>
<div class="outer-wrapper">
  <div class="wrapper">
    <div id="banner">
      <div class="wsite-header"></div>
    </div>
    <div id="content"><div id='wsite-content' class='wsite-not-footer'>
      <?php echo $content; ?>
</div>
</div>
    <div id="footer"><?php echo Html::encode(\Yii::$app->name); ?>
</div>
  </div>
</div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
