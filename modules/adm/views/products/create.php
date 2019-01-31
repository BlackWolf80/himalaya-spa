<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HiProducts */

$this->title = 'Создать продукт';
$this->params['breadcrumbs'][] = ['label' => $model->nameModel, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hi-products-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
