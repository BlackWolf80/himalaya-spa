<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\adm\models\CallbackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $searchModel->nameModel;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hi-callback-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать онлайн заказ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'service',
            'date',
            'name',
            'phone',
            [
                'attribute' => 'status',
                'value' => function($data){

                    $link= \yii\helpers\Url::to(['/adm/callback/update-ind','id'=>$data->id]);
                    return !$data->status ?
                        '<span class = "text-danger">
                        '.Html::a('Не звонили',$link).'
                        </span>' :
                        '<span class = "text-success">Звонили</span>';
                },
                'format'=>'raw',
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
