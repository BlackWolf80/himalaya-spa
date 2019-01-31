<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\adm\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $searchModel->nameModel;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hi-category-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    </br>
    <p>
        <?= Html::a('Создать категорию', ['create'], ['class' => 'btn btn-success']) ?>
    </p></br>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'name:html',
            [

                'attribute' => 'name',
                'value' => function($data){
                    return '<a href="/adm/category/view?id=' .$data->id. '">' .$data->name. '</a>';
                },
                'format' => 'html',
            ],
//            'status',
            [
                'attribute' => 'status',
                'value' => function($data){
                    return !$data->status ?
                        '<span class = "text-danger">Не опубликовано</span>' :
                        '<span class = "text-success">Опубликовано</span>';
                },
                'format'=>'raw',
            ],
//            'description:html',
            [

                'attribute' => 'image',
                'value' => function($data){
                    return Html::img($data->image,['class'=>'image_category_adm']);
                },
                'format' => 'html',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
