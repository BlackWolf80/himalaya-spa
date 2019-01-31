
<!--allrecords-->
<div id="allrecords" class="t-records"
     data-hook="blocks-collection-content-node"
     data-tilda-project-id="415831"
     data-tilda-page-id="2607597"
     data-tilda-page-alias="uslugi"
     data-tilda-formskey="f89c4bd37bc105a61a3bedeb7b449dea">

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
            <?php foreach ($products as $product):?>


            <!-- Модальное окно -->
            <div class="modal fade  bd-example-modal-lg" id="product_<?=$product['id']?>" tabindex="-1" role="dialog" aria-labelledby="product_<?=$product['id']?>" aria-hidden="true">
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

            <div class="t778__container t-container t778__container_mobile-flex" data-blocks-per-row="4">

                <div class="t778__col t-col t-col_3 t-align_center t-item js-product" data-product-lid="1497456130776">
                    <div class="t778__wrapper" style="background-color: #ebebeb;border-radius:5px;box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.10);">

                            <div class="t778__imgwrapper " style="padding-bottom:57.692307692308%;">


                                <?php if($product['hit']==1):?>
                                    <div class="t778__markwrapper">
                                        <div class="t778__mark" field="li_mark__1497456130776" style="color:#ffffff;background-color:#cc1d46;">ХИТ</div>
                                    </div>
                                <?php endif;?>



                                <div class="t778__bgimg t-bgimg js-product-img" data-original="
                                <?=\yii\helpers\Url::to($product['image'])?>"
                                     style="
                                     background-image:url('https://static.tildacdn.com/tild3763-3434-4231-b438-313862396666/-/resize/20x/massage.jpg');
                                     border-radius:5px 5px 0px 0px;
                                     top:-2px;" role="img" aria-label="
                                     <?=$product['name'];?>
                                    " bgimgfield="li_gallery__1497456130776:::0"></div>
                            </div>

                        <div class="t778__content">

                                <div class="t778__textwrapper t778__paddingsmall">
                                    <div class="t778__title t-name t-name_xs js-product-name" field="li_title__1497456130776" style="
                                    color:#000000;
                                    font-size:15px;
                                    font-weight:400;
                                    font-family:'Arial';">
                                        <?=$product['name'];?>
                                    </div>
                                    <div class="t778__descr t-descr t-descr_xxs" field="li_descr__1497456130776" style="color:#000000;font-size:14px;font-weight:400;font-family:'Geometria';">Длительность сеансов
                                        <br /><?=$product['period']?> минут</div>


                                      <div class="t778__price-wrapper">
                                        <div class="t778__price t778__price-item t-name t-name_xs" style="
                                        color:#000000;
                                        font-weight:400;">
                                            <div class="t778__price-value js-product-price" field="li_price__1497456130776"><?=$product['price']?></div>
                                            <div class="t778__price-currency">₽</div>
                                        </div>
                                    </div>

                                </div>


                            <div class="t778__btn-wrapper_absolute t778__paddingsmall">
                                <a  class="t778__btn t778__btn t-btn t-btn_sm" data-toggle="modal" data-target="#product_<?=$product['id']?>"
                                   style="color:#ffffff;
                                   border:2px solid #ffffff;
                                   background-color:#274d40;
                                   border-radius:30px;
                                   -moz-border-radius:30px;
                                   -webkit-border-radius:30px;font-family:Geometria;font-weight:400;">
                                    <table style="width:100%; height:100%;">
                                        <tr>
                                            <td>Подробнее</td>
                                        </tr>
                                    </table>
                                </a>

                            </div>


                        </div>
                    </div>
                </div>

                <?php endforeach;?>
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
        <!--/allrecords-->



