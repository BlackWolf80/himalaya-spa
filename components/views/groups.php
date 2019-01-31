<div id="rec62122268" class="r t-rec t-rec_pt_30 t-rec_pb_0" style="padding-top:30px;padding-bottom:0px;background-color:#ebebeb; " data-animationappear="off" data-record-type="334" data-bg-color="#ebebeb">
    <div class="t334">
        <div class="t-container t334__nohover-mobile" data-show-button="true">

            <?php foreach ($groups as $group):?>
            <div class="t334__col t-col t-col_4 t-align_center ">
                <a href="/service?id=<?=$group['id'];?>" target="">
                    <div class="t334__table" style="height:40vh;">
                        <div class="t334__cell t-align_center t-valign_middle">
                            <div class="t334__bg t334__animation_fast t334__bg_animated t-bgimg" bgimgfield="img" data-original="
                            <?=$group['image']?>" style="background-image:url('https://static.tildacdn.com/tild3639-6239-4466-a662-633439316234/-/resize/20x/kedr-bochka.jpg');"></div>
                            <div class="t334__overlay t334__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.10), rgba(0,0,0,0.20)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.10), rgba(0,0,0,0.20)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.10), rgba(0,0,0,0.20)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.10), rgba(0,0,0,0.20));"></div>
                            <div class="t334__textwrapper t334__animation_fast t334__textwrapper_animated">
                                <div class="t334__textwrapper__content">
                                    <div class="t334__title t-name t-name_xl" field="title" >
                                        <div style="font-family:'OrchideaPro';color:#ffffff;" data-customstyle="yes"><?=$group['name'];?></div>
                                    </div>
                                    <div class="t334__button-container">
                                        <div class="t334__button-wrapper">
                                            <div class="t334__submit t-btn t334__submit_middle" style="color:#ffffff;border:1px solid #ffffff;background-color:#274d40;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;font-weight:400;">подробнее</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach;?>

        </div>
    </div>
</div>



