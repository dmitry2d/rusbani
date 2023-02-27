
<?php
/*
* Section Working
*/
?>

<?php
    // print_pre (get_fields(31, 1));
?>

<div class="working">

    <div class="working__title">
        <div class="container">
            Как мы работаем
        </div>
    </div>

    <div class="working__grid">

        <div class="working__grid__bg">
            <img src="<?= get_field('how-we-are-working-bg', 31)?>" alt="">
        </div>

        <div class="working__grid__items container">

            <?php
                $items = get_field('how-we-are-working', 31);
                foreach ($items as $item) {
            ?>

                <div class="working__item">

                    <div class="working__item__number">
                        <b><?= $item ['number'] ?></b>%
                    </div>
                    
                    <div class="working__item__text">
                        <?= $item ['text'] ?>
                    </div>

                </div>

            <?php
                }
            ?>
        </div>

    </div>

</div>

<!-- section-working.php -->
<style>

    .working {
        background: rgb(var(--col-bg-beige));
        padding: 20rem 0;
    }

    .working__title {
        padding: 30rem;
        font-size: 48rem;
        color: rgb(var(--col-brown));
        font-weight: 400;
        text-align: center;
    }

    .working__grid {
        padding: 50rem 0;
    }
    .working__grid__items {
        display: flex;
        background: #ffffffa0;
    }
    .working__item {
        flex-basis: 10rem;
        flex-grow: 1;
        padding: 30rem;
        display: flex;
        flex-direction: column;
    } 
    .working__item__number {
        font-size: 96rem;
        font-weight: 400;
        color: rgb(var(--col-dark-beige));
        text-align: center;
    }
    .working__item__number b {
        font-size: 128rem;
        font-weight: 600;
    }
    .working__item__text {
        font-size: 24rem;
        font-weight: 400;
        color: rgb(var(--col-main));
        text-align: center;
        padding: 30rem;
        background: #ffffff;
        flex-grow: 1;
    }

    .working__grid__bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    .working__grid__bg img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: center;
    }

    @media screen and (max-width: 640px) {
        .working {
            padding: 0 0 20rem;
        }
        .working__title {
            padding: 20rem 0;
            font-size: 32rem;
            text-align: center;
        }
        .working__grid {
            padding: 20rem 0;
        }
        .working__grid__items {
            flex-direction: column;
            padding: 20rem 0;
        }
        .working__item {
            padding: 0 20rem;
        }
        .working__item__number {
            font-size: 64rem;
        }
        .working__item__number b {
            font-size: 78rem;
        }
        .working__item__text {
            font-size: 20rem;
            font-weight: 400;
            padding: 20rem;
        }
    }

</style>