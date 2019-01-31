<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\HiProducts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hi-products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php
    if(!$model->isNewRecord){
        if(isset($_GET['int'])){
            echo $form->field($model, 'image')->textInput(['maxlength' => true,'value'=>$model->dir.'/'.$_GET['int']]);
        }
        else{
            echo $form->field($model, 'image')->textInput(['maxlength' => true]);
        }

        echo Html::a('Выбрать изображение',['/adm/products/upload','id'=>$model->id],['class'=>'btn btn-success']);
    }
    ?>

    <?= $form->field($model, 'period')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'category_id')
        ->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\HiCategory::find()->all(),'id','name')) ?>



    <?php

    echo $form->field($model, 'description')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]);

    ?>

    <?= $form->field($model, 'hit')->checkbox([ '0' => 'Не опубликовано', '1' => 'Опубликовано',]) ?>

    <?= $form->field($model, 'status')->checkbox([ '0' => 'Не опубликовано', '1' => 'Опубликовано',]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
