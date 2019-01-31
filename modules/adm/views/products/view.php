<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HiProducts */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => $model->nameModel, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hi-products-view">


    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute' => 'period',
                'value' => function($data){
                    return $data->period.' мин.';

                },
                'format'=>'raw',
            ],
            [

                'attribute' => 'image',
                'value' => function($data){
                    return Html::img($data->image,['class'=>'image_category_adm']);
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'price',
                'value' => function($data){
                    return $data->price.' ₽';

                },
                'format'=>'raw',
            ],
            [
                'attribute' => 'status',
                'value' => function($data){
                    return !$data->status ?
                        '<span class = "text-danger">Не опубликовано</span>' :
                        '<span class = "text-success">Опубликовано</span>';
                },
                'format'=>'raw',
            ],
            [
                'attribute' => 'category_id',
                'value' => function($data){

                    $group = \app\models\HiCategory::findOne($data->category_id);
                    return $group->name;
                },
                'format'=>'raw',
            ],
            [
                'attribute' => 'hit',
                'value' => function($data){
                    return !$data->hit ?
                        '<span class = "text-danger">Нет</span>' :
                        '<span class = "text-success">Да</span>';
                },
                'format'=>'raw',
            ],
            'description:html',
            'image',
        ],
    ]) ?>

</div>
