<?php
$this->title =  'Гималаи спа | '.$_SESSION['title'];
$this->params['breadcrumbs'][] = $this->title;
?>



<?=\app\components\PointsWidget::widget();?>


<div id="gallery">
    <?php foreach ($gallery as $image):?>
    <a href="images/large/<?=$image->link?>"><img src="images/thumbs/<?=$image->link?>"  /></a>
    <?php endforeach;?>
</div>



<script type="text/javascript">
    $( function() {
        $( '#gallery' ).jGallery();
    } );
</script>
