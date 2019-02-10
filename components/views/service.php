<div id="rec50133294" class="r t-rec t-rec_pt_195 t-rec_pb_0" style="
    padding-top:3em;
    padding-bottom:0px; " data-record-type="43">
    <!-- T030 -->
    <div class="t030">
        <div class="t-container t-align_center">
            <div class="t-col t-col_12 ">
                <h2 class="t030__title t-title t-title_xxs t-animate"
                    data-animate-style="zoomin"
                    data-animate-group="yes" field="title" style="
                        color:#18181f;
                        font-size:34px;
                        font-weight:300;
                        font-family:'Geometria';">
                    <div style="font-family:'OrchideaPro';" data-customstyle="yes">
                        <span style="font-weight: 300;"><?=$group->name?> </span>
                    </div>
                </h2>
            </div>
        </div>
    </div>
</div>

<div id="rec50551350" class="r t-rec t-rec_pt_30 t-rec_pb_0" style="padding-top:30px;padding-bottom:0px; " data-animationappear="off" data-record-type="778">
    <!-- t778 -->
    <div class="t778">
        <div class="t778__scroll-icon-wrapper">
            <svg class="t778__scroll-icon" style="width:22px;fill:#bebebe;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                <path d="M97.2 298.2S56.1 225 38.8 193.3c-23-42.2-26.8-60-10.9-68.8 9.9-5.5 23.6-3.2 32 11.4l19.6 31.2V44.8s-1.2-32.3 21.8-32.3c24.5 0 22.4 32.3 22.4 32.3v59.4s12.9-9.3 28-5.1c7.7 2.1 16.7 5.8 21.5 18 0 0 30.7-14.9 46 16.8 0 0 35.4-7 35.4 29.7s-44.2 134.6-44.2 134.6H97.2zM249.9.5l-10.6 10.6 24.1 23.8H158.5v15h105l-24.2 23.9 10.6 10.6 42.5-42z" class="st0" /> </svg>
        </div>


        <div class="t778__container t-container t778__container_mobile-flex" data-blocks-per-row="4">

            <?php foreach ($products as $product):?>


                <!-- Модальное окно -->
                <div class="modal fade  bd-example-modal-lg" id="product_<?=$product['id']?>" tabindex="-1" role="dialog"
                     aria-labelledby="product_<?=$product['id']?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="product_<?=$product['price']?>">
                                    <?=$product['name']?>
                                </h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">




                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <?=\yii\helpers\Html::img($product['image'])?>
                                        </div>
                                        <div class="col des-left ">
                                            <b> <?=$product['price'].' ₽'?></b></b><br>
                                            <?=$product['description']?>

                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Модальное окно -->


<!--    //-->
            <div class="t778__col t-col t-col_3 t-align_center t-item js-product" data-product-lid="1512138214875">
                <div class="t778__wrapper" style="background-color: #ebebeb;border-radius:5px;box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.10);">

                        <div class="t778__imgwrapper " style="padding-bottom:57.692307692308%;">

                            <?php if($product['hit']==1):?>
                                <div class="t778__markwrapper">
                                    <div class="t778__mark" field="li_mark__1497456130776" style="color:#ffffff;background-color:#cc1d46;">ХИТ</div>
                                </div>
                            <?php endif;?>



                            <div class="t778__bgimg t-bgimg js-product-img"
                                 data-original="<?=\yii\helpers\Url::to($product['image'])?>"
                                 style="background-image:url('<?=\yii\helpers\Url::to($product['image'])?>');
                                  border-radius:5px 5px 0px 0px;top:-2px;" role="img" aria-label="Массаж спины и шейно-ворот. зоны" bgimgfield="li_gallery__1512138214875:::0">

                            </div>
                        </div>

                    <div class="t778__content">

                            <div class="t778__textwrapper t778__paddingsmall">
                                <div class="t778__title t-name t-name_xs js-product-name" field="li_title__1512138214875" style="color:#000000;font-size:15px;font-weight:400;font-family:'Arial';">
                                    <?=$product['name'];?>
                                </div>
                                <div class="t778__descr t-descr t-descr_xxs" field="li_descr__1512138214875" style="color:#000000;font-size:14px;font-weight:400;font-family:'Geometria';">
                                    Длительность сеансов
                                    <br />
                                    <?=$product['period']?> минут
                                </div>
                                <div class="t778__price-wrapper">
                                    <div class="t778__price t778__price-item t-name t-name_xs" style="color:#000000;font-weight:400;">
                                        <div class="t778__price-value js-product-price" field="li_price__1512138214875"> <?=$product['price']?></div>
                                        <div class="t778__price-currency">₽</div>
                                    </div>
                                </div>
                            </div>

                        <div class="t778__btn-wrapper_absolute t778__paddingsmall">
                            <a href="#product_<?=$product['id']?>" data-toggle="modal"
                               class="t778__btn t778__btn t-btn t-btn_sm" style="
                            color:#ffffff;border:2px solid #ffffff;
                            background-color:#274d40;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;font-family:Geometria;font-weight:400;">
                                <table style="width:100%; height:100%;">
                                    <tr>
                                        <td>подробнее</td>
                                    </tr>
                                </table>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
<!--            //-->



            <?php endforeach;?>


        </div>



        <div class="t-popup" style="background-color: rgba(31,27,26,0.80);">

            <div class="t778__close-text-wrapper">
                <div class="t778__close-text t-descr t-descr_xxs" style="color:#e6e6e6;">

                <?=\yii\helpers\Html::a('Назад к списку',Yii::$app->request->referrer)?>
                </div>
            </div>
            <div class="t-popup__container t-popup__container-static" style="background-color:#ededed;">
                <div id="t778__product-1497456130776" class="t778__product-full js-product" style="display:none;" data-product-lid="1497456130776">
                    <div class="t778__container">
                        <div class="t778__col_left t-col t-col_6">
                            <!-- gallery -->
                            <div class="t-slds" style="visibility: hidden;">
                                <div class="t-slds__main">
                                    <div class="t-slds__container" style="background-color:#1f1b1a;">
                                        <div class="t-slds__items-wrapper t-slds_animated-none t-slds__nocycle" data-slider-transition="300" data-slider-with-cycle="false" data-slider-correct-height="true" data-auto-correct-mobile-width="false">
                                            <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                                                <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                                                    <meta itemprop="image" content="https://static.tildacdn.com/tild3763-3434-4231-b438-313862396666/massage.jpg">
                                                    <meta itemprop="caption" content="Классический тайский массаж">
                                                    <div class="t-slds__imgwrapper" bgimgfield="gi_img__0">
                                                        <div class="t-slds__bgimg t-bgimg js-product-img" data-original="https://static.tildacdn.com/tild3763-3434-4231-b438-313862396666/massage.jpg" style="padding-bottom:100%; background-image: url('https://static.tildacdn.com/tild3763-3434-4231-b438-313862396666/-/resizeb/20x/massage.jpg');"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/gallery -->
                        </div>
                        <div class="t778__col_right t778__wrapper t-col t-col_6 t-align_left">
                            <div class="t778__title-wrapper">
                                <div class="t778__title t-name t-name_xl js-product-name">Классический тайский массаж</div>
                            </div>
                            <div class="t778__price-wrapper">
                                <div class="t778__price t778__price-item t-name t-name_md" style="color:#000000;font-weight:400;">
                                    <div class="t778__price-value js-product-price" field="li_price__1497456130776">от 2700</div>
                                    <div class="t778__price-currency">₽</div>
                                </div>
                            </div>
                            <div class="t778__descr t-descr t-descr_xxs">
                                <div style="font-size:16px;" data-customstyle="yes">Уникальная техника способствует улучшению осанки, устранению солевых отложений, нормализации работы всех систем организма.
                                    <br />
                                    <br /><span style="color: rgb(0, 102, 66);">Проконсультируем и выберем удобное для вас время визита</span>
                                    <br />Москва м.Пушкинская +7 (965) 366-50-00
                                    <br />Одинцово +7 (499) 391-98-31
                                    <br />
                                    <br /><span style="color: rgb(0, 102, 66);">Или воспользуйтесь онлайн записью</span>
                                    <br />Форма откроется в новой вкладке, вы можете выбрать время и дату визита, после чего наш менеджер перезвонит вам для подтверждения данных
                                    <br />
                                    <br /><a href="https://n99668.yclients.com/" style="color:#b9d600 !important;text-decoration: none;border-bottom: 1px solid #3d3533;box-shadow: inset 0px -0px 0px 0px #3d3533;-webkit-box-shadow: inset 0px -0px 0px 0px #3d3533;-moz-box-shadow: inset 0px -0px 0px 0px #3d3533;" target="_blank" rel="nofollow"><span style="color: rgb(0, 102, 66);">Записаться онлайн</span></a> - Классический тайский массаж 1 час / 2500 руб
                                    <br />
                                    <br /><a href="https://n99669.yclients.com/" style="color:#b9d600 !important;text-decoration: none;border-bottom: 1px solid #3d3533;box-shadow: inset 0px -0px 0px 0px #3d3533;-webkit-box-shadow: inset 0px -0px 0px 0px #3d3533;-moz-box-shadow: inset 0px -0px 0px 0px #3d3533;" target="_blank" rel="nofollow"><span style="color: rgb(0, 102, 66);">Записаться онлайн</span></a> - Классический тайский массаж 1,5 час / 3700 руб
                                    <br />
                                    <br /><a href="https://n99670.yclients.com/" style="color:#b9d600 !important;text-decoration: none;border-bottom: 1px solid #3d3533;box-shadow: inset 0px -0px 0px 0px #3d3533;-webkit-box-shadow: inset 0px -0px 0px 0px #3d3533;-moz-box-shadow: inset 0px -0px 0px 0px #3d3533;" target="_blank" rel="nofollow"><span style="color: rgb(0, 102, 66);">Записаться онлайн</span></a> - Классический тайский массаж 2 час / 4800 руб
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--.prod-full-->
                <div id="t778__product-1498486301712" class="t778__product-full js-product" style="display:none;" data-product-lid="1498486301712">
                    <div class="t778__container">
                        <div class="t778__col_left t-col t-col_6">
                            <!-- gallery -->
                            <div class="t-slds" style="visibility: hidden;">
                                <div class="t-slds__main">
                                    <div class="t-slds__container" style="background-color:#1f1b1a;">
                                        <div class="t-slds__items-wrapper t-slds_animated-none t-slds__nocycle" data-slider-transition="300" data-slider-with-cycle="false" data-slider-correct-height="true" data-auto-correct-mobile-width="false">
                                            <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                                                <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                                                    <meta itemprop="image" content="https://static.tildacdn.com/tild3939-3934-4166-b934-366632386130/massage2.jpg">
                                                    <meta itemprop="caption" content="Тайский массаж ног и стоп">
                                                    <div class="t-slds__imgwrapper" bgimgfield="gi_img__0">
                                                        <div class="t-slds__bgimg t-bgimg js-product-img" data-original="https://static.tildacdn.com/tild3939-3934-4166-b934-366632386130/massage2.jpg" style="padding-bottom:100%; background-image: url('https://static.tildacdn.com/tild3939-3934-4166-b934-366632386130/-/resizeb/20x/massage2.jpg');"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/gallery -->
                        </div>
                        <div class="t778__col_right t778__wrapper t-col t-col_6 t-align_left">
                            <div class="t778__title-wrapper">
                                <div class="t778__title t-name t-name_xl js-product-name">Тайский массаж ног и стоп</div>
                            </div>
                            <div class="t778__price-wrapper">
                                <div class="t778__price t778__price-item t-name t-name_md" style="color:#000000;font-weight:400;">
                                    <div class="t778__price-value js-product-price" field="li_price__1498486301712">2700</div>
                                    <div class="t778__price-currency">₽</div>
                                </div>
                            </div>
                            <div class="t778__descr t-descr t-descr_xxs">
                                <div style="font-size:16px;" data-customstyle="yes">Не секрет, что на стопах ног располагаются биологически активные точки.
                                    <br /> Для опытного мастера стопы-это карта с нанесённой на неё проекцией внутренних оррганов. Воздействуя на определённые области, специалист тайского массажа запускает процессы самооздоровления и исцеления. Данная процедура обладает профилактическим эффектом варикозного расширения вен.
                                    <br />
                                    <br /><span style="color: rgb(0, 102, 66);">Проконсультируем и выберем удобное для вас время визита</span>
                                    <br />Москва м.Пушкинская +7 (965) 366-50-00
                                    <br />Одинцово +7 (499) 391-98-31
                                    <br />
                                    <br /><span style="color: rgb(0, 102, 66);">Или воспользуйтесь онлайн записью</span>
                                    <br />Форма откроется в новой вкладке, вы можете выбрать время и дату визита, после чего наш менеджер перезвонит вам для подтверждения данных
                                    <br />
                                    <br />
                                    <br /><a href="https://n99672.yclients.com/" style="color:#b9d600 !important;text-decoration: none;border-bottom: 1px solid #3d3533;box-shadow: inset 0px -0px 0px 0px #3d3533;-webkit-box-shadow: inset 0px -0px 0px 0px #3d3533;-moz-box-shadow: inset 0px -0px 0px 0px #3d3533;" target="_blank" rel="nofollow"><span style="color: rgb(0, 102, 66);">Записаться онлайн</span></a> - Тайский массаж ног и стоп 1ч / 2700 руб
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--.prod-full-->
                <div id="t778__product-1512138205039" class="t778__product-full js-product" style="display:none;" data-product-lid="1512138205039">
                    <div class="t778__container">
                        <div class="t778__col_left t-col t-col_6">
                            <!-- gallery -->
                            <div class="t-slds" style="visibility: hidden;">
                                <div class="t-slds__main">
                                    <div class="t-slds__container" style="background-color:#1f1b1a;">
                                        <div class="t-slds__items-wrapper t-slds_animated-none t-slds__nocycle" data-slider-transition="300" data-slider-with-cycle="false" data-slider-correct-height="true" data-auto-correct-mobile-width="false">
                                            <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                                                <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                                                    <meta itemprop="image" content="https://static.tildacdn.com/tild3031-6138-4338-b335-646165383239/massage3.jpg">
                                                    <meta itemprop="caption" content="Тайский массаж лица и головы">
                                                    <div class="t-slds__imgwrapper" bgimgfield="gi_img__0">
                                                        <div class="t-slds__bgimg t-bgimg js-product-img" data-original="https://static.tildacdn.com/tild3031-6138-4338-b335-646165383239/massage3.jpg" style="padding-bottom:100%; background-image: url('https://static.tildacdn.com/tild3031-6138-4338-b335-646165383239/-/resizeb/20x/massage3.jpg');"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/gallery -->
                        </div>
                        <div class="t778__col_right t778__wrapper t-col t-col_6 t-align_left">
                            <div class="t778__title-wrapper">
                                <div class="t778__title t-name t-name_xl js-product-name">Тайский массаж лица и головы</div>
                            </div>
                            <div class="t778__price-wrapper">
                                <div class="t778__price t778__price-item t-name t-name_md" style="color:#000000;font-weight:400;">
                                    <div class="t778__price-value js-product-price" field="li_price__1512138205039">от 1800</div>
                                    <div class="t778__price-currency">₽</div>
                                </div>
                            </div>
                            <div class="t778__descr t-descr t-descr_xxs">
                                <div style="font-size:16px;" data-customstyle="yes">Источник красоты и молодости тайских женщин-массаж лица и головы. Придаёт сияние, подтягивает, возвращает тонус коже. Обладает отличным антистрессовым эффектом. Насыщает клетки кислородом, способствует выработке собственного коллагена и устранению мелких морщинок.
                                    <br />
                                    <br /><span style="color: rgb(0, 102, 66);">Проконсультируем и выберем удобное для вас время визита</span>
                                    <br />Москва м.Пушкинская +7 (965) 366-50-00
                                    <br />Одинцово +7 (499) 391-98-31
                                    <br />
                                    <br /><span style="color: rgb(0, 102, 66);">Или воспользуйтесь онлайн записью</span>
                                    <br />Форма откроется в новой вкладке, вы можете выбрать время и дату визита, после чего наш менеджер перезвонит вам для подтверждения данных
                                    <br />
                                    <br /><a href="https://n99683.yclients.com/" style="color:#b9d600 !important;text-decoration: none;border-bottom: 1px solid #3d3533;box-shadow: inset 0px -0px 0px 0px #3d3533;-webkit-box-shadow: inset 0px -0px 0px 0px #3d3533;-moz-box-shadow: inset 0px -0px 0px 0px #3d3533;" target="_blank" rel="nofollow"><span style="color: rgb(0, 102, 66);">Записаться онлайн</span></a> - Тайский массаж лица и головы 30м / 1800 руб
                                    <br />
                                    <br /><a href="https://n99684.yclients.com/" style="color:#b9d600 !important;text-decoration: none;border-bottom: 1px solid #3d3533;box-shadow: inset 0px -0px 0px 0px #3d3533;-webkit-box-shadow: inset 0px -0px 0px 0px #3d3533;-moz-box-shadow: inset 0px -0px 0px 0px #3d3533;" target="_blank" rel="nofollow"><span style="color: rgb(0, 102, 66);">Записаться онлайн</span></a> - Тайский массаж лица и головы 1ч / 2700 руб
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--.prod-full-->
                <div id="t778__product-1512138214875" class="t778__product-full js-product" style="display:none;" data-product-lid="1512138214875">
                    <div class="t778__container">
                        <div class="t778__col_left t-col t-col_6">
                            <!-- gallery -->
                            <div class="t-slds" style="visibility: hidden;">
                                <div class="t-slds__main">
                                    <div class="t-slds__container" style="background-color:#1f1b1a;">
                                        <div class="t-slds__items-wrapper t-slds_animated-none t-slds__nocycle" data-slider-transition="300" data-slider-with-cycle="false" data-slider-correct-height="true" data-auto-correct-mobile-width="false">
                                            <div class="t-slds__item t-slds__item_active" data-slide-index="1">
                                                <div class="t-slds__wrapper" itemscope itemtype="http://schema.org/ImageObject">
                                                    <meta itemprop="image" content="https://static.tildacdn.com/tild6437-6163-4733-b838-376133393961/massage4.jpg">
                                                    <meta itemprop="caption" content="Массаж спины и шейно-ворот. зоны">
                                                    <div class="t-slds__imgwrapper" bgimgfield="gi_img__0">
                                                        <div class="t-slds__bgimg t-bgimg js-product-img" data-original="https://static.tildacdn.com/tild6437-6163-4733-b838-376133393961/massage4.jpg" style="padding-bottom:100%; background-image: url('https://static.tildacdn.com/tild6437-6163-4733-b838-376133393961/-/resizeb/20x/massage4.jpg');"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/gallery -->
                        </div>
                        <div class="t778__col_right t778__wrapper t-col t-col_6 t-align_left">
                            <div class="t778__title-wrapper">
                                <div class="t778__title t-name t-name_xl js-product-name">Массаж шейно-ворот. зоны</div>
                            </div>
                            <div class="t778__price-wrapper">
                                <div class="t778__price t778__price-item t-name t-name_md" style="color:#000000;font-weight:400;">
                                    <div class="t778__price-value js-product-price" field="li_price__1512138214875">от 1800</div>
                                    <div class="t778__price-currency">₽</div>
                                </div>
                            </div>
                            <div class="t778__descr t-descr t-descr_xxs">
                                <div style="font-size:16px;" data-customstyle="yes">Тайский классический массаж с акцентированным воздействием на шейно-воротниковую зону. Способствует глубокому энергетическому и физическому восстановлению. Избавляет от последствий хронического стресса и психоэмоциональных перегрузок.
                                    <br />
                                    <br /><span style="color: rgb(0, 102, 66);">Проконсультируем и выберем удобное для вас время визита</span>
                                    <br />Москва м.Пушкинская +7 (965) 366-50-00
                                    <br />Одинцово +7 (499) 391-98-31
                                    <br />
                                    <br /><span style="color: rgb(0, 102, 66);">Или воспользуйтесь онлайн записью</span>
                                    <br />Форма откроется в новой вкладке, вы можете выбрать время и дату визита, после чего наш менеджер перезвонит вам для подтверждения данных
                                    <br />
                                    <br /><a href="https://n99685.yclients.com/" style="color:#b9d600 !important;text-decoration: none;border-bottom: 1px solid #3d3533;box-shadow: inset 0px -0px 0px 0px #3d3533;-webkit-box-shadow: inset 0px -0px 0px 0px #3d3533;-moz-box-shadow: inset 0px -0px 0px 0px #3d3533;" target="_blank" rel="nofollow"><span style="color: rgb(0, 102, 66);">Записаться онлайн</span></a> - Тайский массаж лица и головы 30м / 1800 руб
                                    <br />
                                    <br /><a href="https://n99686.yclients.com/" style="color:#b9d600 !important;text-decoration: none;border-bottom: 1px solid #3d3533;box-shadow: inset 0px -0px 0px 0px #3d3533;-webkit-box-shadow: inset 0px -0px 0px 0px #3d3533;-moz-box-shadow: inset 0px -0px 0px 0px #3d3533;" target="_blank" rel="nofollow"><span style="color: rgb(0, 102, 66);">Записаться онлайн</span></a> - Тайский массаж лица и головы 1ч / 2700 руб
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--.prod-full-->
            </div>
        </div>





    </div>





    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                t778__init('50551350');
            }, 500);
        });
        $('.t778').bind('displayChanged', function() {
            t778_unifyHeights('50551350');
        });
    </script>
    <style>
        @media screen and (max-width: 960px) {
            #rec50551350 .t778__col {
                padding-top: 15px;
                padding-bottom: 15px;
            }
        }
    </style>
    <style type="text/css">
        #rec50551350 .t-slds__bullet_active .t-slds__bullet_body {
            background-color: #222 !important;
        }

        #rec50551350 .t-slds__bullet:hover .t-slds__bullet_body {
            background-color: #222 !important;
        }
    </style>
    <style>
        #rec50551350 .t-btn:not(.t-animate_no-hover):hover {
            background-color: #006642 !important;
            color: #ffffff !important;
        }

        #rec50551350 .t-btn:not(.t-animate_no-hover) {
            -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
    </style>
</div>