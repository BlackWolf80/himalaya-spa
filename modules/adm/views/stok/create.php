<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HiStok */

$this->title = 'Create Hi Stok';
$this->params['breadcrumbs'][] = ['label' => 'Hi Stoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hi-stok-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
