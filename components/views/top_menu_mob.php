<div class="t451m__container t-align_center">
    <div class="t451m__top">
        <div class="t451m__menu">
            <ul class="t451m__list">

                <li class="t451m__list_item"><a class="t-menu__link-item" href="/" style="color:#08080a;font-size:14px;font-weight:500;letter-spacing:2px;font-family:&apos;Geometria&apos;;text-transform:uppercase;margin-bottom:10px;" data-menu-item-number="1">Главная</a></li>

                <?php foreach ($menu as $items):?>
                    <li class="t451m__list_item"><a class="t-menu__link-item" href="<?=$items['link']?>" style="
                    color:#08080a;
                    font-size:14px;
                    font-weight:500;
                    letter-spacing:2px;
                    font-family:"Geometria";
                        text-transform:uppercase;
                        margin-bottom:10px;"
                        data-menu-item-number="<?=$items['id']+1?>"><?=$items['name']?></a></li>
                <?php endforeach;?>

            </ul>
        </div>
    </div>