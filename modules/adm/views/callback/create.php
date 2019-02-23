<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HiCallback */

$this->title = 'Создать онлайн заказ';
$this->params['breadcrumbs'][] = ['label' => $model->nameModel, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hi-callback-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
