
<?php
/*
* Section Feedback
*/
?>

<?php
    // print_pre (get_fields(31, 1));
?>

<div class="feedback">

    <div class="feedback__title">
        <div class="container">
            Отзывы о компании
        </div>
    </div>

    <div class="feedback__items__wrapper container">

        <div class="feedback__items">

            <?php
                $items = get_field('feedback', 31);
                foreach($items as $item) {
            ?>

                <div class="feedback__item">

                    <div class="feedback__item__wrapper">
                        <div class="feedback__item__name">
                            <?= $item['name']?>
                        </div>
                        <div class="feedback__item__text">
                            <?= $item['text']?>
                        </div>
                    </div>

                </div>

            <?php
                }
            ?>

        </div>

    </div>

</div>

<!-- section-feedback.php -->
<style>
    .feedback {
        background: rgb(var(--col-bg-beige));
        padding: 20rem 0;
    }
    .feedback__items {
        width: 100%;
        display: flex;
        /* justify-content: stretch; */
        align-items: stretch;
    }
    .feedback__title {
        padding: 30rem;
        font-size: 48rem;
        color: rgb(var(--col-brown));
        font-weight: 400;
        text-align: center;
    }
    .feedback__item {
        text-align: center;
        padding: 20rem 0;
    }
    .feedback__item__wrapper {
        max-width: 850rem;
        margin: 0 auto;
        background-color: #ffffff;
        background-image:  
        url('<?= get_template_directory_uri(); ?>/src/images/quote_open.png'),
        url('<?= get_template_directory_uri(); ?>/src/images/quote_close.png');
        background-repeat: no-repeat;
        background-position: 
        30rem 30rem,
        right 30rem bottom 30rem;
        box-shadow: 0 0 15rem 0 rgba(var(--col-brown),0.2);
        padding: 20rem 50rem 50rem;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .feedback__item__name {
        color: rgb(var(--col-dark-beige));
        font-size: 30rem;
        font-weight: 500;
        margin: 10rem 0;
    }
    .feedback__item__text {
        color: rgb(var(--col-main));
        font-size: 24rem;
        font-weight: 400;
    }
    .feedback__items__prev-arrow,
    .feedback__items__next-arrow {
        min-width: 75rem;
        background: url('<?= get_template_directory_uri(); ?>/src/images/go-passive.png') no-repeat center center;
        background-size: 100% auto;
        cursor: pointer;
        transition: 0.2s;
    }
    .feedback__items__next-arrow {
        transform: scale(-1,1);
    }
    .feedback__items__prev-arrow:hover,
    .feedback__items__next-arrow:hover {
        background-image: url('<?= get_template_directory_uri(); ?>/src/images/go-active.png');
    }

    @media screen and (max-width: 640px) {
        .feedback {
            padding: 0 0 20rem;
        }
        .feedback__title {
            padding: 20rem 0;
            font-size: 32rem;
            text-align: center;
        }
        .feedback__items__prev-arrow,
        .feedback__items__next-arrow {
            min-width: 30rem;
            width: 30rem;
            background: url('<?= get_template_directory_uri(); ?>/src/images/go-passive-small.png') no-repeat center center;
            background-size: 100% auto;
        }
        .feedback__items__prev-arrow {
            margin-left: -15rem;
        }
        .feedback__items__next-arrow {
            margin-right: -15rem;
        }
        .feedback__item {
            padding: 20rem 15rem;
        }
        .feedback__item__wrapper {
        }
        .feedback__item__wrapper {
            background-image:  
                url('<?= get_template_directory_uri(); ?>/src/images/quote_open.png'),
                url('<?= get_template_directory_uri(); ?>/src/images/quote_close.png');
            background-repeat: no-repeat;
            background-position: 
                20rem 20rem,
                right 20rem bottom 20rem;
            background-size: 20rem;
            padding: 40rem 40rem 60rem;
        }
        .feedback__item__name {
            font-size: 22rem;
        }
        .feedback__item__text {
            font-size: 15rem;
        }
    }

</style>

<!-- section-feedback.php -->
<script>
    $(document).ready(function(){
        $('.feedback__items').slick({
            prevArrow: '<div class="feedback__items__prev-arrow"></div>',
            nextArrow: '<div class="feedback__items__next-arrow"></div>'
        });
    });
</script>