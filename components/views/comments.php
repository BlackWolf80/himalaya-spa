



<div id="rec50965707" class="r t-rec t-rec_pt_120 t-rec_pt-res-480_0 t-rec_pb_0" style="padding-top:120px;padding-bottom:0px; " data-record-type="43" >
    <!-- T030 -->
    <div class="t030">
        <div class="t-container t-align_center">
            <div class="t-col t-col_12 ">
                <h3 class="t030__title t-title t-title_xxs t-animate" data-animate-style="zoomin" data-animate-group="yes" field="title" style="color:#1c1c1c;font-size:34px;font-weight:300;font-family:'OrchideaPro';">
                    <div style="color:#18181f;" data-customstyle="yes">~ Отзывы наших клиентов ~</div>
                </h3>
            </div>
        </div>
    </div>
</div>
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
                        <div class="t529__text t-text t-text_sm" field="li_text__1478014798002" style="color: #454545; font-size:16px;margin-bottom:1px;font-family:&apos;Arial&apos;;">
                            <?=$comment['body']?>
                        </div>
                    </div>
                    <div class="t529__bubble-tail" style="border-color: #ebebeb transparent transparent #ebebeb;"></div>
                    <div class="t529__name-wrapper">
                        <div class="t-cell">
                            <div class="t529__bgimg t-img" data-original="/images/noavatar.png" bgimgfield="li_img__1478014798002" style=" background-image: url('https://static.tildacdn.com/tild3739-3139-4332-b061-643262623630/-/resize/20x/mkEENeS0sUk.jpg');" ></div>
                        </div>
                        <div class="t-cell">
                            <div class="t529__name t-name t-name_xs" field="li_title__1478014798002" style=" ">
                                <div style="font-family:'OrchideaPro';color:#000000;" data-customstyle="yes"><span style="font-weight: 400;"><?=$comment['name']?></span></div>
                            </div>

                        </div>
                    </div>
                </div>

            <?php endforeach;?>
            <div class="t-clear t529__separator" style=""></div>
        </div>
        <div class="t-section__container t-container">
            <div class="t-col t-col_12">
                <div class="t-section__bottomwrapper t-clear t-align_center fadeinup">
                    <a href="/feedback" target="" class="t-btn t-btn_sm t-animate" data-animate-style="fadeinup" data-animate-group="yes" style="color:#000000;border:2px solid #000000;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;font-family:Arial;font-weight:400;box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.3);">
                        <table style="width:100%; height:100%;">
                            <tr>
                                <td>Посмотреть все отзывы</td>
                            </tr>
                        </table>
                    </a>
                </div>
            </div>
        </div>
        <style>#rec50971005 .t-btn:not(.t-animate_no-hover):hover{ background-color: #ffffff !important;	}	#rec50971005 .t-btn:not(.t-animate_no-hover){ transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;	}</style>
    </div>
</div>