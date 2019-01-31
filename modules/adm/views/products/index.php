<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\adm\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $searchModel->nameModel;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hi-products-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать продукт', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

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
            //'description:ntext',
            //'image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
