<?php
$this->title =  'Гималаи спа | '.$_SESSION['title'];
$this->params['breadcrumbs'][] = $this->title;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;
?>


<!-- T030 -->
    <div class="t030">
        <div class="t-container t-align_left">
            <div class="t-col t-col_12 ">
                <div class="t030__descr t-descr t-descr_md" field="descr" style="">
                   <div style="font-size:14px;text-align:center;" data-customstyle="yes"><br /><br /><h3>Помогите нам стать лучше, ваше мнение важно для нас!</h3></div>
                </div>
            </div>
        </div>
    </div>



<div class="container">
    <div class="row">
        <div class="col-sm-4 ">
            <div class="fixed-box">
                <div class="fixed-div">
                    <br /><br /><br />
                    <h4>Оставьте свой отзыв</h4><br />
                    <?php $form = ActiveForm::begin(['options'=>["class" => "form-horizontal",'id' => 'callForm']]) ?>
                    <?=$form->field($feed,'name') ?>
                    <?=$form->field($feed,'email')->input('email') ?>
                    <?=$form->field($feed,'body')->textarea(['rows'=>5]) ?>
                    <?= $form->field($feed, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-2">{image}</div><div class="col-lg-14">{input}</div></div>',]) ?>
                    <div class="capcha_des"> (чтобы обновить код кликните по нему мышью.)</div>
                    <?=Html::submitButton('Отправить', ['class'=> 'add_call'])?>
                    <?php ActiveForm::end() ?>
                </div>
            </div>

        </div>
        <div class="col-sm-6">

            <div id="rec50971005" class="r t-rec t-rec_pt_0 t-rec_pb_120 t-rec_pb-res-480_0" style="padding-top:0px;padding-bottom:120px; " data-record-type="529" >
                <!-- t529 -->
                <div class="t529">
                    <div class="t-section__container t-container">
                        <div class="t-col t-col_12">
                            <div class="t-section__topwrapper t-align_center">
                                <div class="t-section__title t-title t-title_xs t-animate" data-animate-style="zoomin" data-animate-group="yes" field="btitle">
                                    <div style="font-size:36px;font-family:'IskraCYR';color:#ffffff;" data-customstyle="yes"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t529__container t-container">
                        <?php foreach ($comments as $comment):?>

                            <div class="t529__col t-col t-col_6 t-animate" data-animate-style="fadeinup" data-animate-chain="yes">
                                <div class="t529__bubble t529__bubble_left" style="background: #ebebeb; border-radius: 5px;">
                                    <div class="t529__text t-text t-text_sm" field="li_text__1478014691630" style="color: #454545; font-size:16px;margin-bottom:1px;font-family:&apos;Arial&apos;;">
                                        <?=$comment['body']?>
                                    </div>
                                </div>
                                <div class="t529__bubble-tail" style="border-color: #ebebeb transparent transparent #ebebeb;"></div>
                                <div class="t529__name-wrapper">
                                    <div class="t-cell">
                                        <div class="t529__bgimg t-img" data-original="/images/noavatar.png" bgimgfield="li_img__1478014691630" style=" background-image: url('https://static.tildacdn.com/tild6561-3765-4935-a339-663366623033/-/resize/20x/1zyMXoNHrD8.jpg');" ></div>
                                    </div>
                                    <div class="t-cell">
                                        <div class="t529__name t-name t-name_xs" field="li_title__1478014691630" style=" ">
                                            <div style="font-family:'OrchideaPro';color:#000000;" data-customstyle="yes"><span style="font-weight: 400;"><?=$comment['name']?></span></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="t-clear t529__separator" style=""></div>
                        <?php endforeach;?>


                    </div>
                    <style>#rec50971005 .t-btn:not(.t-animate_no-hover):hover{ background-color: #ffffff !important;	}	#rec50971005 .t-btn:not(.t-animate_no-hover){ transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;	}</style>
                </div>
            </div>

        </div>

    </div>
</div>

<script>
    $(document).ready(function($) {
        $nav = $('.fixed-div');
        $nav.css('width', $nav.outerWidth());
        $window = $(window);
        $h = $nav.offset().top;
        $window.scroll(function() {
            if ($window.scrollTop() > $h) {
                $nav.addClass('fixed');
            } else {
                $nav.removeClass('fixed');
            }
        });
    });
</script>