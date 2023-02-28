
<?php
/*
* Section Top Inner
*/
?>

<?php
    // print_pre (get_fields(10, 1));
?>

<div class="bottom">

    <div class="container">

        <div class="bottom__grid">

            <div class="bottom__logo-and-title">
                <div class="bottom__logo">
                    <img src="<?= get_template_directory_uri(); ?>/src/images/logo.png">
                </div>
                <div class="bottom__title">
                    <?= get_field('footer-logo-title', 29)?>
                </div>
            </div>

            <div class="bottom__address">
                <b>Адрес производства:</b><br>
                <?= get_field('requisites-address', 10)['city'] ?>,<br>
                <?= get_field('requisites-address', 10)['adress'] ?>
            </div>

            <div class="bottom__time">
                <b>График раоты:</b><br>
                <?= get_field('requisites-work', 10)['days'] ?>,<br>
                <?= get_field('requisites-work', 10)['time'] ?>
            </div>

            <div class="bottom__phone">
                <a href="tel:<?= get_field('requisites-phone', 10) ?>"><?= get_field('requisites-phone', 10) ?></a>
            </div>
        
        </div>
    
    </div>

</div>

<!-- section-bottom.php -->
<style>
    .bottom {
        background:
        linear-gradient(0deg, rgba(50, 21, 0, 0.7), rgba(50, 21, 0, 0.7)),
        linear-gradient(0deg, rgba(7, 25, 72, 0.4), rgba(7, 25, 72, 0.4)),
        url('<?= get_field('footer-image', 29)?>') no-repeat left top;
        background-size: cover;
        padding: 40px 0;
    }
    .bottom__grid {
        display: flex;
    }
    .bottom__grid > div {
        min-width: 25%;
        align-items: flex-start;
    }
    .bottom__logo-and-title {
        display: flex;
    }
    .bottom__logo {
        width: 70rem;
        height: 70rem;
    }
    .bottom__logo img {
        display: block;
        width: 70rem;
        height: 100%;
        object-fit: contain;
    }
    .bottom__title {
        color: rgb(var(--col-white));
        font-size: 13rem;
        padding-left: 30rem;
    }
    .bottom__title h1 {
        color: rgb(var(--col-white));
        font-size: 20rem;
        font-weight: 700;
        margin: 0;
        padding: 0 0 20rem;
    }
    .bottom__title b {
        display: block;
    }
    .bottom__address {
        color: rgb(var(--col-white));
        font-size: 16rem;
        font-weight: 300;
        background: url("<?= get_template_directory_uri(); ?>/src/images/icons/location_on.png") no-repeat left top;
        background-size: 36rem;
        padding-left: 50rem;
    }
    .bottom__time {
        color: rgb(var(--col-white));
        font-size: 16rem;
        font-weight: 300;
        background: url("<?= get_template_directory_uri(); ?>/src/images/icons/history_toggle_off.png") no-repeat left top;
        background-size: 36rem;
        padding-left: 50rem;
    }
    .bottom__address b,
    .bottom__time b {
        font-weight: 500;
    }
    .bottom__phone {
        background: url("<?= get_template_directory_uri(); ?>/src/images/icons/phone_in_talk.png") no-repeat left top;
        background-size: 36rem;
        padding-left: 50rem;
        min-height: 36rem;
    }
    .bottom__phone a {
        color: rgb(var(--col-white));
        font-size: 22rem;
        font-weight: 700;
        text-decoration: none;
    }
    @media screen and (max-width: 640px) {
        .bottom__grid {
            flex-direction: column;
            padding-left: 20rem;
        }
        .bottom__grid > div {
            min-width: 100%;
            
        }
        .bottom__logo {
            width: 100rem;
            height: 100rem;
        }
        .bottom__logo img {
            display: block;
            width: 100rem;
            height: 100%;
            object-fit: contain;
        }
        .bottom__title {
            color: rgb(var(--col-white));
            font-size: 13rem;
            padding-left: 40rem;
        }
        .bottom__address {
            font-size: 14rem;
            padding-left: 60rem;
            margin-left: 20rem;
            margin-top: 30rem;
        }
        .bottom__time {
            font-size: 14rem;
            padding-left: 60rem;
            margin-left: 20rem;
            margin-top: 30rem;
        }
        .bottom__phone {
            padding-left: 60rem;
            margin-left: 20rem;
            margin-top: 30rem;
        }
    }
</style>


