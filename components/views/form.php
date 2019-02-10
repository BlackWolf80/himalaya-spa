<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use kartik\datetime\DateTimePicker;

?>
<?php if($type == 'button'):?>


    <div class="t228__right_buttons">
        <div class="t228__right_buttons_wrap">
            <div class="t228__right_buttons_but">
                <a href="#onlineForm" class="t-btn " data-toggle="modal" data-target="#onlineForm" style="color:#ffffff;border:2px solid #ffffff;background-color:#274d40;border-radius:20px; -moz-border-radius:20px; -webkit-border-radius:20px;font-family:Geometria;font-weight:500;box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);">
                    <table style="width:100%; height:100%;">
                        <tr>
                            <td>~ Онлайн запись ~</td>
                        </tr>
                    </table>
                </a>
            </div>
        </div>
    </div>



<?php else:?>

    <!-- Модальное окно -->
    <div class="modal fade  bd-example-modal-lg" id="onlineForm" tabindex="-1" role="dialog" aria-labelledby="onlineForm" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="onlineForm">
                        Заказ услуги
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'service')
                        ->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\HiProducts::find()->all(),'name','name')) ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'phone') ?>

                    <?php
                    if($model->date) {
                        $model->date = date("Y-m-d", (integer) $model->date);
                    }
                    echo $form->field($model, 'date')->widget(DateTimePicker::className(),[
                        'name' => 'dp_1',
                        'type' => DateTimePicker::TYPE_INPUT,
                        'options' => ['placeholder' => 'Ввод даты...'],
                        'convertFormat' => true,
                        'value'=> date("Y-m-d",(integer) $model->date),
                        'pluginOptions' => [
                            'format' => 'yyyy-MM-dd',
                            'autoclose'=>true,
                            'weekStart'=>1, //неделя начинается с понедельника
                            'startDate' => date('Y-m-d'), //самая ранняя возможная дата
                            'todayBtn'=>true, //снизу кнопка "сегодня"
                        ]
                    ]); ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Заказать', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>


                </div>
            </div>
        </div>
    </div>
    <!-- //Модальное окно -->
<?php endif;?>


