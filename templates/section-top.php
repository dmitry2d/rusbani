
<?php
/*
* Section Top
*/
?>

<?php
    // print_pre (get_fields(10, 1));
?>

<div class="top">

    <div class="top__photo">
        <img src="<?= get_field('header-photo', 27); ?>">
    </div>

    <div class="container">

        <div class="top__grid">

            <div class="top__grid__left">

                <div class="top__logo">
                    <img src="<?= get_template_directory_uri(); ?>/src/images/logo.png">
                </div>

                <div class="top__title">
                    <div class="top__title__line1"><?= get_field('header-text', 27)['line-1']; ?></div>
                    <div class="top__title__line2"><?=  get_field('header-text', 27)['line-2']; ?></div>
                    <div class="top__title__line3"><?=  get_field('header-text', 27)['line-3']; ?></div>
                </div>

            </div>

            <div class="top__grid__right">

                <div class="top__address">
                    <b>Адрес производства:</b><br>
                    <?= get_field('requisites-address', 10)['city'] ?>,<br>
                    <?= get_field('requisites-address', 10)['adress'] ?>
                </div>

                <div class="top__time">
                    <b>График раоты:</b><br>
                    <?= get_field('requisites-work', 10)['days'] ?>,<br>
                    <?= get_field('requisites-work', 10)['time'] ?>
                </div>

                <div class="top__button top__button__phone">
                    <a href="tel:<?= get_field('requisites-phone', 10) ?>"><?= get_field('requisites-phone', 10) ?></a>
                    
                </div>
                <div class="top__button">
                    <a href="<?= get_field('requisites-whatsapp', 10) ?>">Whatsapp</a>
                </div>
                <div class="top__button">
                    <a href="<?= get_field('requisites-email', 10) ?>">E-mail</a>
                </div>

            </div>

        </div>

    </div>

    <div class="top__border"></div>

</div>

<!-- section-top.php -->
<style>

    .top__photo {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }
    .top__photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .top__photo:before {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        content: '';
        background:
        linear-gradient(180deg, rgba(14, 10, 0, 0.5) 0%, rgba(130, 72, 30, 0.5) 100%),
        linear-gradient(0deg, rgba(7, 25, 72, 0.3), rgba(7, 25, 72, 0.3));
        z-index: 1;
    }

    .top .container {
        z-index: 2;
        padding: 30rem 0 70rem;
    }

    .top__grid {
        display: flex;
    }

    .top__grid__left {
        flex-grow: 1;
    }
    .top__grid__right {
        min-width: 384rem;
    }

    .top__logo img {
        width: 192rem;
    }

    .top__title {
        color: rgb(var(--col-white));
        padding-top: 190rem;
        font-weight: 400;
    }

    .top__title__line1 {
        font-size: 61rem;
        font-weight: 700;
        text-transform: uppercase;
        line-height: 1;
        max-width: 600rem;
    }
    .top__title__line2 {
        font-size: 34rem;
        line-height: 1;
    }
    .top__title__line3 {
        font-size: 46rem;
        line-height: 1;
    }
    .top__title__line3 b {
        line-height: 1;
        font-size: 61rem;
        font-weight: 700;
    }

    .top__address {
        color: rgb(var(--col-white));
        font-size: 16rem;
        font-weight: 300;
        background: url("<?= get_template_directory_uri(); ?>/src/images/icons/location_on.png") no-repeat left top;
        background-size: 36rem;
        padding-left: 50rem;
        margin-top: 22rem;
    }
    .top__time {
        color: rgb(var(--col-white));
        font-size: 16rem;
        font-weight: 300;
        background: url("<?= get_template_directory_uri(); ?>/src/images/icons/history_toggle_off.png") no-repeat left top;
        background-size: 36rem;
        padding-left: 50rem;
        margin-top: 37rem;
        margin-bottom: 212rem;
    }
    .top__address b,
    .top__time b{
        font-weight: 500;
    }

    .top__button{
        background: rgba(var(--col-green),0.85);
        padding: 15rem 44rem;
        margin-bottom: 11rem;
        text-align: center;
    }
    .top__button,
    .top__button a {
        color: rgb(var(--col-white));
        font-weight: 400;
        font-size: 30rem;
        text-decoration: none;
        text-align: center;
    }
    .top__button__phone a {
        background: url("<?= get_template_directory_uri(); ?>/src/images/icons/phone_in_talk.png") no-repeat left top;
        background-size: 36rem;
        font-weight: 600;
        padding-left: 50rem;
    }

    .top__border {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 10rem;
        background: rgba(36, 15, 0, 0.6);
        z-index: 2;
    }

    @media screen and (max-width: 640px) {
        .top .container {
            z-index: 2;
            padding: 30rem 0;
        }
        .top__grid {
            flex-direction: column;
        }
        .top__grid > div {
            min-width: unset;
            width: 100%;
            text-align: center;
        }
        .top__address,
        .top__time {
            display: none;
        }
        .top__button {
            padding: 15rem;
        }
        .top__button a {
            font-size: 20rem;
            background-size: 25rem;
        }
        .top__title {
            padding: 130rem 0 30rem;
        }
        .top__title__line1 {
            font-size: 36rem;
        }
        .top__title__line2 {
            font-size: 21rem;
        }
        .top__title__line3 {
            font-size: 28rem;
        }
        .top__title__line3 b {
            font-size: 36rem;
        }
    }

</style>