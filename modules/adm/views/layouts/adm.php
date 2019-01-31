<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdmAsset;

AdmAsset::register($this);
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
        'brandLabel' => Yii::$app->name.' - администратор',
        'brandUrl' => '/adm',
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Каталог',

                'items' => [
                    ['label' => 'Категории', 'url' => ['/adm/category']],
                    ['label' => 'Продукты', 'url' => ['/adm/products']],

                ],

            ],
            ['label' => 'Акции', 'url' => ['/adm/stok']],
            ['label' => 'Отзывы', 'url' => ['/adm/feedback']],
            ['label' => 'GII', 'url' => ['/gii']],
            [
                'label' => 'Debug',
                'icon' => 'fa fa-dashboard',
                'url' => ['/debug'],
                'options' => ['class' => 'special'],
                'template'=> '<a href="{url}" target="_blank">{icon}{label}</a>',
            ],

            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login'], 'options' => ['class' => 'special'],]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();

    ?>



    <div class="container content">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>