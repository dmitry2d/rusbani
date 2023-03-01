
<?php
/*
* Section Project - Base Setup
*/
?>

<?php
    global $post;
    $base_setup_post_ID = get_field('base-setup', $post->ID);
    $items = get_field('base-setup_options', $base_setup_post_ID);
    $price  = get_field('base-setup_price', $base_setup_post_ID);
    $picture  = get_field('base-setup_picture', $base_setup_post_ID);
    $title = get_the_title($base_setup_post_ID);
?>


<div class="setup-base">

    <div class="container">
        <div class="setup-base__title">
            Базовая комплектация
        </div>
        <div class="setup-base__table">
            <div class="setup-base__table__title">
                <?= $title ?>
            </div>
            <div class="setup-base__items">
                <?php
                    foreach($items as $item) {
                ?>
                    <div class="setup-base__item">
                        <div class="setup-base__item__text">
                            <?= $item['work-type'] ?>
                        </div>
                        <div class="setup-base__item__pictures">
                            <img src="<?= get_template_directory_uri(); ?>/src/images/icons/setup-item-photo.png">
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
            <div class="setup-base__item__price">
                Цена базовой комплектации 
                <b><?= $price ?>₽</b>
            </div>
            <div class="setup-base__item__picture">
                <img src="<?= $picture ?>" alt="">
            </div>
        </div>
    </div>
    
</div>


<!-- section-project-setup-base.php -->
<style>

    .setup-base {
        background: rgba(var(--col-dark-beige), 0.1);
        padding: 20rem 0 40rem;
    }
    .setup-base__title {
        padding: 20rem 0;
        font-size: 32rem;
        color: rgb(var(--col-main));
        font-weight: 400;
        line-height: 1;
    }
    .setup-base__table {
        display: flex;
        align-items: center;
        background: rgba(var(--col-white), 0.5);
        box-shadow: inset 0 0 0rem 10rem rgba(var(--col-dark-beige), 0.5);
    }
    .setup-base__table__title {
        font-size: 24rem;
        padding: 20rem 40rem;
        color: rgb(var(--col-main));
        min-width: 250rem;
    }
    
    .setup-base__items {
        display: flex;
        flex-direction: column;
        padding: 40rem;
        flex-grow: 1;
        min-width: 40%;
    }
    .setup-base__item {
        font-size: 18rem;
        color: rgb(var(--col-main));
        display: flex;
        align-items: flex-start;
    }
    .setup-base__item__text {
        flex-grow: 1;
        padding: 5rem;
    }
    .setup-base__item__pictures {
        padding: 5rem;
    }
    .setup-base__item__pictures img {
        width: 24rem;
    }
    .setup-base__item__price {
        max-width: fit-content;
        background: rgba(var(--col-white), 0.5);
        color: rgb(var(--col-brown));
        padding: 40rem;
        font-size: 27rem;
        font-weight: 600;
    }
    .setup-base__item__price b{
        display: block;
        font-size: 41rem;
        font-weight: 600;
    }
    .setup-base__item__picture {
        width: 220rem;
        min-width: 220rem;
        height: 220rem;
    }
    .setup-base__item__picture img {
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        object-fit: contain;
    }
    
    @media screen and (max-width: 640px) {
        .setup-base {
            background: rgba(var(--col-dark-beige), 0.1);
            padding: 10rem 0 0;
        }
        .setup-base__title {
            font-size: 24rem;
        }
        .setup-base__table {
            flex-direction: column;
            padding: 40rem;
        }
        .setup-base__table > div {
            min-width: 100%;
            width: 100%;
        }
        .setup-base__item__picture {
            display: none;
        }
        .setup-base__item__price {
            display: none;
        }
        .setup-base__table__title {
            padding: 0 0 20rem;
            font-size: 26rem;
            font-weight: 500;
        }
        .setup-base__items {
            padding: 0;
        }
        .setup-base__item__text {
            padding-left: 0;
        }
       
    }
</style>