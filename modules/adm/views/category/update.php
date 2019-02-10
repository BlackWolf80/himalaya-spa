<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HiCategory */

$this->title = 'Редактирование: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => $model->nameModel, 'url' => ['/adm']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="hi-category-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
