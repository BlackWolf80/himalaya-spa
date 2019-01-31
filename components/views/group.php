<!--allrecords-->
<div id="allrecords" class="t-records"
     data-hook="blocks-collection-content-node"
     data-tilda-project-id="415831"
     data-tilda-page-id="2607597"
     data-tilda-page-alias="uslugi"
     data-tilda-formskey="f89c4bd37bc105a61a3bedeb7b449dea">


    <div id="rec50551350" class="r t-rec t-rec_pt_30 t-rec_pb_0" style="padding-top:30px;padding-bottom:0px; " data-animationappear="off" data-record-type="778">
        <!-- t778 -->
        <div class="t778">
            <?php foreach ($groups as $group):?>

            <div class="t778__container t-container t778__container_mobile-flex" data-blocks-per-row="4">

                <div class="t778__col t-col t-col_3 t-align_center t-item js-product" data-product-lid="1497456130776">
                    <div class="t778__wrapper" style="background-color: #ebebeb;border-radius:5px;box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.10);">

                            <div class="t778__imgwrapper " style="padding-bottom:57.692307692308%;">


                                <div class="t778__bgimg t-bgimg js-product-img" data-original="<?=$group['image']?>"
                                     style="
                                     background-image:url('https://static.tildacdn.com/tild3763-3434-4231-b438-313862396666/-/resize/20x/massage.jpg');
                                     border-radius:5px 5px 0px 0px;
                                     top:-2px;" role="img" aria-label="
                                     <?=$group['name'];?>
                                    " bgimgfield="li_gallery__1497456130776:::0"></div>
                            </div>

                        <div class="t778__content">

                                <div class="t778__textwrapper t778__paddingsmall">
                                    <div class="t778__title t-name t-name_xs js-product-name" field="li_title__1497456130776" style="
                                    color:#000000;
                                    font-size:15px;
                                    font-weight:400;
                                    font-family:'Arial';">
                                        <?=$group['name'];?>
                                    </div>

                                    <div class="t778__price-wrapper">
                                        <div class="t778__price t778__price-item t-name t-name_xs" style="
                                        color:#000000;
                                        font-weight:400;">

                                        </div>
                                    </div>
                                </div>

                            <div class="t778__btn-wrapper_absolute t778__paddingsmall">
                                <a href="/service?id=<?=$group['id'];?>" class="t778__btn t778__btn t-btn t-btn_sm" style="
                                color:#ffffff;
                                border:2px solid #ffffff;
                                background-color:#274d40;
                                border-radius:30px;
                                 -moz-border-radius:30px;
                                  -webkit-border-radius:30px;
                                  font-family:Geometria;
                                  font-weight:400;">
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



