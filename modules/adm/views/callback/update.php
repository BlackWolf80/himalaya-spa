<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HiCallback */

$this->title = 'Онлайн заказ услуги: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => $model->nameModel, 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Заказ № '.$model->id.' - '.$model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="hi-callback-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
