<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\HiCategory */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => $model->nameModel, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);


?>
<div class="hi-category-view">

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
//            'id',
            'name',
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

                'attribute' => 'image',
                'value' => function($data){
                    return Html::img($data->image,['class'=>'image_category_adm']);
                },
                'format' => 'html',
            ],
            'description:html',
        ],
    ]) ?>

    <div class="hi-products-index">



        <?= GridView::widget([
            'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
            'columns' => [
//            'id',
//            'name',
                [

                    'attribute' => 'name',
                    'value' => function($data){
                        return '<a href="/adm/products/view?id=' .$data->id. '">' .$data->name. '</a>';
                    },
                    'format' => 'html',
                ],
                [

                    'attribute' => 'image',
                    'value' => function($data){
                        return Html::img($data->image,['class'=>'image_category_adm']);
                    },
                    'format' => 'html',
                ],
//            'period',
                [
                    'attribute' => 'period',
                    'value' => function($data){
                        return $data->period.' мин.';

                    },
                    'format'=>'raw',
                ],
//            'price',
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
//            'category_id',

                [
                    'attribute' => 'hit',
                    'value' => function($data){
                        return !$data->hit ?
                            '<span class = "text-danger">Нет</span>' :
                            '<span class = "text-success">Да</span>';
                    },
                    'format'=>'raw',
                ],
                //'description:ntext',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>

</div>
