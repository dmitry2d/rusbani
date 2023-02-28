
<?php
/*
* Section Top Inner
*/
?>

<?php
    // print_pre (get_fields(27, 1));
?>

<div class="top-inner">

    <div class="container">

        <div class="top-inner__grid">

            <div class="top-inner__logo-and-title">
                <div class="top-inner__logo">
                    <img src="<?= get_template_directory_uri(); ?>/src/images/logo.png">
                </div>
                <div class="top-inner__title">
                    <h1><?= get_field('footer-logo-title', 29)?></h1>
                    <?= get_field('footer-logo-description', 29)?>
                </div>
            </div>

            <div class="top-inner__address">
                <b>Адрес производства:</b><br>
                <?= get_field('requisites-address', 10)['city'] ?>,<br>
                <?= get_field('requisites-address', 10)['adress'] ?>
            </div>

            <div class="top-inner__time">
                <b>График раоты:</b><br>
                <?= get_field('requisites-work', 10)['days'] ?>,<br>
                <?= get_field('requisites-work', 10)['time'] ?>
            </div>

            <div class="top-inner__phone">
                <a href="tel:<?= get_field('requisites-phone', 10) ?>"><?= get_field('requisites-phone', 10) ?></a>
            </div>
        
        </div>
    
    </div>

</div>

<!-- section-top-inner.php -->
<style>
    .top-inner {
        background:
        url('<?= get_field('header-photo-inner', 27)?>') no-repeat left top;
        background-size: cover;
        padding: 20px 0;
    }
    .top-inner__grid {
        display: flex;
    }
    .top-inner__grid > div {
        min-width: 25%;
        align-items: flex-start;
    }
    .top-inner__logo-and-title {
        display: flex;
    }
    .top-inner__logo {
        width: 70rem;
        height: 70rem;
    }
    .top-inner__logo img {
        display: block;
        width: 70rem;
        height: 100%;
        object-fit: contain;
    }
    .top-inner__title {
        color: rgb(var(--col-white));
        font-size: 13rem;
        padding-left: 30rem;
    }
    .top-inner__title h1 {
        color: rgb(var(--col-white));
        font-size: 20rem;
        font-weight: 500;
        margin: 0;
        padding: 0 0 10rem;
    }
    .top-inner__title b {
        display: block;
    }
    .top-inner__address {
        color: rgb(var(--col-white));
        font-size: 14rem;
        font-weight: 300;
        background: url("<?= get_template_directory_uri(); ?>/src/images/icons/location_on.png") no-repeat left top;
        background-size: 36rem;
        padding-left: 50rem;
    }
    .top-inner__time {
        color: rgb(var(--col-white));
        font-size: 14rem;
        font-weight: 300;
        background: url("<?= get_template_directory_uri(); ?>/src/images/icons/history_toggle_off.png") no-repeat left top;
        background-size: 36rem;
        padding-left: 50rem;
    }
    .top-inner__address b,
    .top-inner__time b {
        font-weight: 500;
    }
    .top-inner__phone {
        background: url("<?= get_template_directory_uri(); ?>/src/images/icons/phone_in_talk.png") no-repeat left top;
        background-size: 36rem;
        padding-left: 50rem;
        min-height: 36rem;
    }
    .top-inner__phone a {
        color: rgb(var(--col-white));
        font-size: 22rem;
        font-weight: 700;
        text-decoration: none;
    }
    @media screen and (max-width: 640px) {
        .top-inner__grid {
            flex-direction: column;
            padding-left: 20rem;
        }
        .top-inner__grid > div {
            min-width: 100%;
            
        }
        .top-inner__logo {
            width: 100rem;
            height: 100rem;
        }
        .top-inner__logo img {
            display: block;
            width: 100rem;
            height: 100%;
            object-fit: contain;
        }
        .top-inner__title {
            color: rgb(var(--col-white));
            font-size: 13rem;
            padding-left: 40rem;
        }
        .top-inner__address {
            font-size: 14rem;
            padding-left: 60rem;
            margin-left: 20rem;
            margin-top: 30rem;
        }
        .top-inner__time {
            font-size: 14rem;
            padding-left: 60rem;
            margin-left: 20rem;
            margin-top: 30rem;
        }
        .top-inner__phone {
            padding-left: 60rem;
            margin-left: 20rem;
            margin-top: 30rem;
        }
    }
</style>


