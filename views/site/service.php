<?php
$this->title =  'Гималаи спа | '.$_SESSION['title'];
$this->params['breadcrumbs'][] = $this->title;
?>
<?=\app\components\PointsWidget::widget();?>



<div id="rec62103430" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px; " data-record-type="43">
    <!-- T030 -->
    <div class="t030">
        <div class="t-container t-align_center">
            <div class="t-col t-col_12 ">
                <div class="t030__title t-title t-title_xxs" field="title" style="color:#18181f;font-size:34px;">
                    <div style="font-family:'OrchideaPro';color:#18181f;" data-customstyle="yes"></div>
                </div>
                <div class="t030__descr t-descr t-descr_md" field="descr" style="color:#454545;font-size:16px;font-family:'Arial';">
                    <?php if(isset($_GET['id']) && is_numeric($_GET['id']) ):?>
                        <!--                    -->

                        <?=\app\components\ServiceWidget::widget(['type'=>'group','id'=>$_GET['id']]);?>

                        <!--                    -->
                    <?php else:?>

                        Вас всегда ждет хороший массаж в Краснодаре с удивительной и неповторимой атмосферой,
                        <br /> выраженной в национальном колорите и уюте нашего салона. Незабываемое СПА подарит вам мгновения удовольствия,
                        <br />лишенные стресса и напряжения от повседневной городской жизни.
                        <br />Окунитесь в мир роскошных SPA-массажей, уникальных церемоний красоты по уходу за телом,
                        <br />выполненных лучшими мастерами!
                        <br />
                        <br />

                        <!--                    -->

                        <?=\app\components\ServiceWidget::widget(['type'=>'service']);?>

                        <!--                    -->

                    <?php endif;?>

                </div>
            </div>
        </div>
        <?php if(!isset($_GET['id']))
        {
            echo \app\components\IndexWidget::widget(['view'=>'cover-boa']);
            }
        ?>
    </div>
</div>
