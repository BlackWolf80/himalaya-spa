<div class="t228__centerside t228__menualign_right">
    <div class="top_menu t228__centercontainer">
        <ul class="t228__list">

            <?php foreach ($menu as $items):?>

            <li class="t228__list_item">
                <a class="t-menu__link-item" href="/<?=$items['link']?>"
                   data-menu-item-number="<?=$items['id']?>"><?=$items['name']?>
                </a>
            </li>
            <?php endforeach;?>

        </ul>
    </div>
</div>
