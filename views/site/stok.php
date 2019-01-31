<?php
$this->title =  'Гималаи спа | '.$_SESSION['title'];
$this->params['breadcrumbs'][] = $this->title;
?>

<?=\app\components\PointsWidget::widget();?>

<div id="rec62222428" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px; " data-record-type="43">
    <!-- T030 -->
    <div class="t030">
        <div class="t-container t-align_center">
            <div class="t-col t-col_12 ">
                <div class="t030__title t-title t-title_xxs" field="title" style="color:#18181f;font-size:34px;">
                    <div style="font-family:'OrchideaPro';color:#18181f;" data-customstyle="yes"></div>
                </div>
                <div class="t030__descr t-descr t-descr_md" field="descr" style="color:#454545;font-size:16px;font-family:'Arial';">
                    <strong><em data-redactor-tag="em">Мы стараемся радовать клиентов</em></strong> акциями и скидками, воспользуйтесь текущими предложениями от Гималаи SPA,
                    <br />подарите себе и близким незабываемые впечатления!
                    <br />Нами была разработана обширная программа лояльности, которая помогла сделать массаж доступным каждому.
                    <br />Например, в «Счастливые часы» скидки на спа процедуры и массаж достигают 50%. Особые условия мы предлагаем новым и постоянным клиентам.
                    <br /> Специальные цены распространяются на тех, кто хотел бы купить сертификат на массаж в подарок родным и близким.
            </div>
        </div>
    </div>
</div>


    <div class="block_cent">
        <?php foreach ($stoks as $stok):?>
            <?php if($stok->date_end >= date('Y-m-d')) :?>
                <div class="t778__col t-col t-col_6 t-align_center t-item t778__col_mobile-grid js-product t-animate" data-animate-style="zoomin" data-animate-chain="yes" data-product-lid="1524734420005">
                    <div class="t778__wrapper" style="background-color: #ebebeb;border-radius:5px;box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.10);">
                        <div class="t778__imgwrapper " style="padding-bottom:8.5714285714286%;">
                            <div class="t778__bgimg t-bgimg js-product-img" data-original="
                            /images/akcion.jpg" style="background-image:url('https://static.tildacdn.com/tild3064-3937-4030-b731-373930663531/-/resize/20x/akcion.jpg'); border-radius:5px 5px 0px 0px;top:-2px;" bgimgfield="li_gallery__1524734420005:::0"></div>
                        </div>
                        <div class="t778__content">
                            <div class="t778__textwrapper t778__paddingsmall">
                                <div class="t778__title t-name t-name_xl js-product-name" field="li_title__1524734420005" style="color:#000000;font-size:20px;font-weight:400;font-family:'OrchideaPro';">
                                    <div style="color:#000000;" data-customstyle="yes"><span style="font-weight: 300;">
                                            <?=$stok->discount?>
                                        </span></div>
                                </div>
                                <div class="t778__descr t-descr t-descr_xxs" field="li_descr__1524734420005" style="color:#454545;font-size:15px;font-weight:400;font-family:'Arial';">
                                    <?=$stok->description?>
                                    <br />
                                    <br />

                                    <strong>действует с <?=date("d.m.Y", strtotime($stok->date_start))?> по <?=date("d.m.Y", strtotime($stok->date_end))?></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif;?>

<?php endforeach;?>

    </div>
</div>