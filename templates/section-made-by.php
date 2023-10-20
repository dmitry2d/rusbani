
<?php
/*
* Page Main
*/
?>

<div class="made_by">
    <a href="malinchik.ru" class="made_by__link">
        <div class="made_by__text">Разработка сайта —</div>
        <div class="made_by__logo"><img src="<?= get_template_directory_uri(); ?>/src/images/mav/mav_logo.svg"></div>
    </a>
</div>

<style>
    .made_by {
        display: inline-block;
    }
    .made_by__link {
        display: flex;
        text-decoration: none;
        color: rgba(var(--col-white), 0.5);
        font-size: 11px;
    }
    .made_by__logo img {
        height: 10px;
    }
</style>