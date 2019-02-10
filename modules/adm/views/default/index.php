<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;


?>

<?php Pjax::begin(); ?>
<?= Html::a("Обновить", ['/adm/'], ['class' => 'btn btn-lg btn-primary hidden', 'id' => 'refreshButton']) ?>
    <h4><?= $time ?></h4>
<?php Pjax::end(); ?>
<div class="adm-default-index">
<h2>Онлайн заказы</h2>
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
        ],
    ]); ?>


</div>
<?php
$script = <<< JS
$(document).ready(function() {
    setInterval(function(){ $("#refreshButton").click(); }, 6000);
});
JS;
$this->registerJs($script);
?>