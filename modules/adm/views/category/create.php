<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HiCategory */

$this->title = 'Создать категорию';
$this->params['breadcrumbs'][] = ['label' => $model->nameModel, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hi-category-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
