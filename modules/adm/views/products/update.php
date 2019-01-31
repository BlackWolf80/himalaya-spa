<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HiProducts */

$this->title = 'Редактировать продукт: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => $model->nameModel, 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="hi-products-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
