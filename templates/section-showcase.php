
<?php
/*
* Section Showcase
*/
?>

<?php
    $items = get_posts (array(
        'category' => 5,
    ));
?>

<div class="showcase">

    <div class="showcase__title">

        <div class="container">
            Проекты бань
        </div>

    </div>

    <div class="container">
    
        <div class="showcase__items">

        <?php
            foreach ($items as $item) {
                $photos = get_field('photos', $item -> ID);
                if ($photos) {
                    $photo = $photos[0];
                } else {
                    $photo = get_template_directory_uri() . '/src/images/logo.png';
                }
        ?>
            <a href="<?= get_permalink($item -> ID)?>" class="showcase__item">

                <div class="showcase__item__bg">
                    <img src="<?= $photo ?>">
                </div>

                <div class="showcase__item__photo">
                    <img src="<?= $photo ?>">
                </div>

                <div class="showcase__item__title">
                    <?= get_the_title($item -> ID) ?><br>
                    от <?= get_field('start-price', $item -> ID)?> руб.
                </div>

                <div class="showcase__item__link">
                    <span>Подробнее</span>
                </div>

            </a>

        <?php
            }
        ?>

        </div>

    </div>

</div>

<!-- section-showcase.php -->
<style>

    .showcase {
        background: rgb(var(--col-bg-beige));
        padding: 20rem 0;
    }
    .showcase:before {
        position: absolute;
        inset: 40rem;
        top: 20rem;
        content: '';
        background: #ffffffa0;
    }

    .showcase__title {
        padding: 40rem 0 100rem;
        font-size: 48rem;
        color: rgb(var(--col-brown));
        font-weight: 400;
        text-align: center;
    }

    .showcase__items {
        /* margin: -100rem 0; */
    }
    
    .showcase__item {
        display: flex;
        z-index: 1;
    }
    .showcase__item + .showcase__item {
        margin-top: 100rem;
    }
    .showcase__item__bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        box-shadow: 0 0 20rem 0 rgba(var(--col-brown),0.2);
    }
    .showcase__item__bg img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.7;
    }
    .showcase__item__bg:before {
        z-index: 2;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        content: '';
        background:
            linear-gradient(272.24deg, rgba(7, 25, 72, 0.28) 15.17%, rgba(130, 72, 30, 0.7) 75.34%),
            linear-gradient(0deg, rgba(7, 25, 72, 0.3), rgba(7, 25, 72, 0.3));
    }

    .showcase__item__photo {
        min-width: 393rem;
        height: 290rem;
        margin-top: -30rem;
        margin-bottom: -30rem;
        margin-left: 40rem;
        z-index: 3;
        box-shadow: 0 0 20rem 0 rgba(var(--col-brown),0.2);
        
    }
    .showcase__item__photo img {
        display: block;
        width: 393rem;
        height: 290rem;
        object-fit: cover;
    }
    .showcase__item__photo:before {
        z-index: 2;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        content: '';
        box-shadow: inset 0 0 0 10rem rgba(var(--col-dark-beige),0.5);
    }
    .showcase__item__title {
        font-size: 48rem;
        color: rgb(var(--col-white));
        font-weight: 400;
        align-self: center;
        flex-grow: 1;
        padding: 0 80rem;
        line-height: 1;
        z-index: 3;
    }

    .showcase__item__link {
        border: 4rem solid rgb(var(--col-white));
        padding: 10rem 50rem;
        background: rgba(var(--col-green), 0.7);
        align-self: center;
        z-index: 3;
        margin: 0 50rem;
    }
    .showcase__item {
        text-decoration: none;
    }
    .showcase__item__link span {
        font-size: 32rem;
        font-weight: 500;
        color: rgb(var(--col-white));
        text-decoration: none;
    }
    
    @media screen and (max-width: 640px) {
        .showcase:before {
            position: absolute;
            inset: 160rem 0;
            content: '';
            background: #ffffffa0;
        }
        .showcase__items {
            margin: 0;
        }
        .showcase__title {
            padding: 0 0 40rem;
            font-size: 32rem;
            text-align: center;
        }
        .showcase__item {
            flex-direction: column;
            padding-bottom: 40rem;
        }
        .showcase__item + .showcase__item {
            margin-top: 40rem; 
        }
        .showcase__item__title {
            font-size: 43rem;
            padding: 10rem 20rem;
            line-height: 1;
        }
        .showcase__item__photo {
            min-width: 100%;
            height: 0;
            padding-top: 70%;
            margin: 0;
            margin-top: 20rem;
        }
        .showcase__item__photo img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: unset;
            width: 100%;
            height: 100%;
        }
        .showcase__item__bg {
            left: 20rem;
            right: 20rem;
            width: unset;
        }
        .showcase__item__title {
            margin: 20rem 0;
            font-size: 36rem;
            text-align: center;
        }
        .showcase__item__link {
            margin: 0;
        }
        .showcase__item__link span {
            font-size: 22rem;
        }
    
    }

</style>

