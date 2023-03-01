
<?php
/*
* Section Project - Setup Options
*/
?>

<?php
    global $post;
    $base_setup_post_ID = get_field('base-setup', $post->ID);
    $options_post_IDs = get_field('options', $post->ID);
    // print_pre($options_post_IDs);

    $items = get_field('base-setup_options', $base_setup_post_ID);
    $items = get_field('base-setup_options', $base_setup_post_ID);
    $price  = get_field('base-setup_price', $base_setup_post_ID);
    $picture  = get_field('base-setup_picture', $base_setup_post_ID);
    $title = get_the_title($base_setup_post_ID);
?>


<div class="setup-options">

    <div class="container">
        <div class="setup-options__title">
            Дополнительная комплектация
        </div>

        <div class="setup-options__grid">
            
            <div class="setup-options__table">

                <div class="setup-options__table__tr">
                    <div class="setup-options__table__td">
                        Вид работ
                    </div>
                    <div class="setup-options__table__td">
                        Наименование материалов
                    </div>
                    <div class="setup-options__table__td">
                        Цена
                    </div>
                </div>
                
                <?php
                    foreach($options_post_IDs as $options_post_ID) {
                ?>

                <div class="setup-options__table__tr">
                    <div class="setup-options__table__td">
                        <div class="setup-option__title">
                            <?= get_the_title ($options_post_ID)?> 
                        </div>
                    </div>
                    <div class="setup-options__table__td">

                        <div class="setup-option__items">
                            <?php
                                foreach(get_field ('materials', $options_post_ID) as $item) {
                            ?>
                                <div class="setup-option__item">
                                    <div class="setup-option__item__text">
                                        <?= $item['title'] ?>
                                    </div>
                                    <div class="setup-option__item__pictures">
                                        <img src="<?= get_template_directory_uri(); ?>/src/images/icons/setup-item-photo.png">
                                    </div>
                                </div>
                            <?php
                                }
                            ?>
                        </div>

                    </div>
                    <div class="setup-options__table__td">
                        <div class="setup-option__price">
                            <div class="setup-option__price__text"><?= get_field ('price', $options_post_ID)?></div>
                            <div class="setup-option__price__add">+добавить</div>
                        </div>
                    </div>
                </div>

                <?php
                    }
                ?>

            </div>

            <div class="setup-options__total">
                
                    <div class="setup-options__total__title">
                        Итоговая цена
                    </div>

                    <div class="setup-options__total__price">
                        <div class="setup-options__total__price__total">
                            500 000 ₽ 
                        </div>
                        <div class="setup-options__total__price__base">
                            Базовая цена
                            <b>250 000 ₽</b>
                        </div>
                        <div class="setup-options__total__price__options">
                            + цена дополнений
                            <b>250 000 ₽</b>
                        </div>
                    </div>
                    <div class="setup-options__total__buttons">
                        <div class="setup-options__total__button">Оформить заявку</div>
                        <div class="setup-options__total__button">Задать вопрос</div>
                    </div>

            </div>

        </div>
    
    </div>
    
</div>


<!-- section-project-setup-options.php -->
<style>

    .setup-options {
        background: rgba(var(--col-dark-beige), 0.1);
        padding: 20rem 0 40rem;
    }

    .setup-options__title {
        padding: 20rem 0;
        font-size: 32rem;
        color: rgb(var(--col-main));
        font-weight: 400;
        line-height: 1;
    }
    .setup-options__grid {
        display: flex;
        justify-content: flex-start;
        align-items: flex-start;
    }
    .setup-options__table {
        padding-right: 20rem;
        flex-grow: 1;
    }
    .setup-options__table__td:nth-child(1) {
        min-width: 250rem;
        max-width: 250rem;
    }
    .setup-options__table__td:nth-child(2) {
        flex-grow: 1;
    }
    .setup-options__table__td:nth-child(3) {
        min-width: 25%;
        max-width: 25%;
    }
    .setup-options__table__tr {
        background:  rgba(var(--col-white), 0.5);
        box-shadow: inset 0 0 0 3rem rgba(var(--col-dark-beige), 0.5);
        display: flex;
        padding: 20rem 40rem;
        align-items: center;
        margin-bottom: 10rem;
    }
    .setup-options__table__tr:nth-child(1) {
        background: rgb(var(--col-white));
        box-shadow: unset;
        padding: 15rem 40rem;
    }
    .setup-options__table__tr:nth-child(1)  .setup-options__table__td {
        color: rgb(var(--col-brown));
        font-size: 20rem;
        font-weight: 500;
    }
    .setup-option__title {
        font-size: 20rem;
        color: rgb(var(--col-main));
        font-weight: 500;
        padding: 5rem 20rem 0 0;
        line-height: 0.9;
    }
    .setup-option__items {
        display: flex;
        flex-direction: column;
        padding: 0 20rem 0 0;
        flex-grow: 1;
        min-width: 40%;
    }
    .setup-option__item {
        font-size: 18rem;
        color: rgb(var(--col-main));
        display: flex;
        align-items: flex-start;
    }
    .setup-option__item__text {
        flex-grow: 1;
        padding: 5rem;
    }
    .setup-option__item__pictures {
        padding: 5rem;
    }
    .setup-option__item__pictures img {
        width: 24rem;
    }
    .setup-option__price {
        display: flex;
        align-items: center;
        padding: 5rem 0;
        justify-content: space-between;
        margin-bottom: 20rem;
    }
    .setup-option__price__text {
        color: rgb(var(--col-brown));
        font-size: 18rem;
        font-weight: 500;
    }
    .setup-option__price__add {
        background: rgb(var(--col-green));
        border-radius: 3rem;
        padding: 5rem 10rem;
        color: rgb(var(--col-white));
    }
    .setup-options__total {
        min-width: 250rem;
        max-width: 250rem;
    }
    .setup-options__total {
        box-sizing: border-box;
        background: rgba(var(--col-white),0.5);
        padding: 15rem 20rem;
    }
    .setup-options__total__title {
        color: rgb(var(--col-brown));
        font-size: 24rem;
        font-weight: 500;
        padding-bottom: 15rem;
    }
    .setup-options__total__price {
        padding: 10rem 20rem;
        background: rgba(var(--col-dark-beige),1);
        margin-bottom: 20rem;
    }
    .setup-options__total__price__total {
        color: rgb(var(--col-white));
        font-size: 32rem;
        font-weight: 500;
        margin: 5rem 0;
    }
    .setup-options__total__price__base,
    .setup-options__total__price__options {
        padding: 5rem 0 5rem 40rem;
        color: rgb(var(--col-white));
        font-size: 15rem;
    }
    .setup-options__total__price__base b,
    .setup-options__total__price__options b {
        display: block;
        font-size: 20rem;
        font-weight: 500;
    }
    .setup-options__total__price__base {
        background: url('<?= get_template_directory_uri(); ?>/src/images/icons/calcul.png') no-repeat top 5rem left;
    }

    .setup-options__total__button {
        background: rgb(var(--col-green));
        border-radius: 3rem;
        padding: 10rem 20rem;
        margin: 10rem 0;
        color: rgb(var(--col-white));
        font-size: 16rem;
        text-align: center;
    }

    @media screen and (max-width: 640px) {
        .setup-options {
            padding: 10rem 0 0;
        }
        .setup-options__title {
            font-size: 24rem;
        }
        .setup-options__grid {
            flex-direction: column;
        }
        .setup-options__table {
            padding: 0;
            min-width: 100%;
        }
        .setup-options__table__tr:nth-child(1) {
            display: none;
        }
        .setup-options__table__tr {
            flex-direction: column;
            padding: 20rem;
        }
        .setup-options__table__td {
            min-width: 100%!important;
            max-width: unset!important;
            padding: 0;
        }
        .setup-option__title {
            margin-bottom: 10rem;
        }
        .setup-option__items {
            padding: 0;
        }
        .setup-option__item__text {
            padding-left: 0;
        }
        .setup-option__price {
            display: flex;
            align-items: center;
            padding: 5rem 0;
            justify-content: space-between;
            margin: 20rem 0 0;
        }
        .setup-options__total {
            padding: 10rem 0;
            min-width: 100%;
            max-width: unset;
            position: sticky;
            bottom: 0;    
        }
        .setup-options__total:before {
            position: absolute;
            content: '';
            inset: 0 -20rem;
            background: rgba(var(--col-white),1); 
        }
        .setup-options__total__title {
            padding: 5rem 0;
        }
        .setup-options__total__price {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 10rem; 
        }
        .setup-options__total__price__total {
            min-width: 100%;
        }
        .setup-options__total__price__base {
            min-width: 30%;
            flex-grow: 1;
        }
        .setup-options__total__price__options {
            background: none;
            padding-left: 40rem;
        }
        .setup-options__total__buttons {
            display: flex;
            margin: 0 -5rem;

        }
        .setup-options__total__button {
            margin: 5rem;
            flex-basis: 10rem;
            flex-grow: 1;
        }
    }
</style>