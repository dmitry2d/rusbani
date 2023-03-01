
<?php
/*
* Section Top Inner
*/
?>

<?php
    // print_pre (get_fields(27, 1));
?>

<div class="top-inner__padding"></div>
<div class="top-inner">

    <div class="container">

        <div class="top-inner__grid">

            <div class="top-inner__logo">
                <a href="/">
                    <img src="<?= get_template_directory_uri(); ?>/src/images/logo.png">
                </a>
            </div>

            <div class="top-inner__title">
                <h1><?= get_field('footer-logo-title', 29)?></h1>
                <?= get_field('footer-logo-description', 29)?>
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

        <div class="top-inner__hamburger"></div>
    
    </div>

</div>

<!-- section-top-inner.php -->
<style>
    .top-inner__hamburger {
        position: absolute;
        top: 10px;
        right: -5px;
        width: 31px;
        height: 31px;
        content: '';
        z-index: 10;
        background: url('<?= get_template_directory_uri(); ?>/src/images/hamburger.png') no-repeat center center;
        cursor: pointer;
        display: none;
    }
    .top-inner.open .top-inner__hamburger {
        background: url('<?= get_template_directory_uri(); ?>/src/images/hamburger__close.png') no-repeat center center;
    }
    .top-inner {
        background:
        url('<?= get_field('header-photo-inner', 27)?>') no-repeat left top;
        background-size: cover;
        padding: 20px 0;
    }
    .top-inner__grid {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .top-inner__grid > div {
        min-width: 20%;
        flex-grow: 1;
        flex-basis: 10rem;
    }
    .top-inner__logo-and-title {
        display: flex;
    }
    .top-inner__grid > div.top-inner__logo {
        width: 70rem;
        height: 70rem;
        min-width: unset;
        flex-basis: unset;
        flex-grow: 0;
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
        line-height: 1.1;
    }
    .top-inner__title h1 {
        color: rgb(var(--col-white));
        font-size: 20rem;
        font-weight: 400;
        margin: 0;
        padding: 0 0 4rem;
    }
    .top-inner__title b {
        display: block;
    }
    .top-inner__address {
        color: rgb(var(--col-white));
        font-size: 14rem;
        font-weight: 300;
        background: url("<?= get_template_directory_uri(); ?>/src/images/icons/location_on.png") no-repeat 20rem top;
        background-size: 36rem;
        padding-left: 70rem;
        line-height: 1.1;
        order: 3;
    }
    .top-inner__time {
        color: rgb(var(--col-white));
        font-size: 14rem;
        font-weight: 300;
        background: url("<?= get_template_directory_uri(); ?>/src/images/icons/history_toggle_off.png") no-repeat 20rem top;
        background-size: 36rem;
        padding-left: 70rem;
        line-height: 1.1;
        order: 4;
    }
    .top-inner__address b,
    .top-inner__time b {
        font-weight: 500;
    }
    .top-inner__phone {
        order: 2;
        padding: 0 20rem;
    }
    .top-inner__phone a {
        color: rgb(var(--col-white));
        font-size: 22rem;
        font-weight: 700;
        text-decoration: none;
        background: rgba(var(--col-green), 0.8) url("<?= get_template_directory_uri(); ?>/src/images/icons/phone_in_talk.png") no-repeat 10rem center;
        padding: 10rem 20rem 10rem 60rem;
        border-radius: 6rem;
        background-size: 36rem;
        max-width: fit-content;
        white-space: nowrap;
    }
    @media screen and (max-width: 640px) {
        .top-inner__padding {
            height: 77rem;
        }
        .top-inner__hamburger {
            display: block;
        }
        .top-inner {
            max-height: 77rem;
            padding: 11rem 0;
            transition: 0.5s;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100;
            overflow: hidden;
            background-size: 100vw;
            background-repeat: repeat-y;
            background-position: right top;
        }
        .top-inner.open {
            max-height: 100vh;
            background-size: 300vw;
            background-position: right -40vw top;
        }
        .top-inner__grid {
            flex-direction: column;
            padding: 0;
            padding-left: 25px;
            padding-right: 20rem;
        }
        .top-inner__grid > div {
            min-width: 100%;
            margin: 0;
        }
        .top-inner__title {
        }
        .top-inner__grid > div.top-inner__logo {
            position: absolute;
            width: 50px;
            height: 50px;
            left: 0;
        }
        .top-inner__logo img {
            display: block;
            width: 50px;
            height: 100%;
            object-fit: contain;
        }
        .top-inner__title {
            color: rgb(var(--col-white));
            font-size: 16rem;
            padding-left: 40px;
            padding-top: 40rem;
            padding-bottom: 20rem;
            order: 2;
        }
        .top-inner__title h1 {
            font-size: 30rem;
        }
        .top-inner__address {
            font-size: 14rem;
            margin: 0;
            padding: 20rem 0;
            padding-left: 40px;
            order: 3;
            background-position: 0 20rem;
        }
        .top-inner__time {
            font-size: 14rem;
            margin: 0;
            padding: 20rem 0;
            padding-left: 40px;
            order: 4;
            background-position: 0 20rem;
        }
        .top-inner__grid > div.top-inner__phone {
            padding: 5px 20rem 5px 40px;
            order: 1;
        }
        .top-inner__phone a {
            display: block;
            padding: 10rem 20rem 10rem 60rem;
            font-size: 20rem;
            min-width: 100%;
        }
    }
</style>

<script>
    $(document).ready (() => {
        $('.top-inner__hamburger').click(()=> {
            $('.top-inner').toggleClass('open');
        })
    });
</script>


