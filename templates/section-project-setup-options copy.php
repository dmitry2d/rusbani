
<?php
/*
* Section Project - Setup Options
*/
?>

<?php
    global $post;
    $base_setup_post_ID = get_field('base-setup', $post->ID);
    $base_title = get_the_title($base_setup_post_ID);
    $base_price = get_field('base-setup_price', $base_setup_post_ID);
    $options_post_IDs = get_field('options', $post->ID);
    $options = get_field('option-setup', $post->ID);
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
                                foreach(get_field ('materials', $options_post_ID) as $index=>$item) {
                            ?>
                                <div class="setup-option__item">
                                    <div class="setup-option__item__text">
                                        <?= $item['title'] ?>
                                    </div>
                                    <div class="setup-option__item__pictures">
                                        <?php if($item['photos']): ?>
                                            <img src="<?= get_template_directory_uri(); ?>/src/images/icons/setup-item-photo.png" options_popup_gallery_index="<?=$index.'---'.$options_post_ID?>">
                                        <?php endif;?>
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
                            <div class="setup-option__price__add" price="<?= get_field ('price', $options_post_ID)?>">
                                <span class=setup-option__price__add__add>+&nbsp;добавить</span>
                                <span class=setup-option__price__add__remove>-&nbsp;убрать</span>
                            </div>
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
                            <span id="prices__total">0 ₽</span>
                        </div>
                        <div class="setup-options__total__price__base">
                            Базовая цена
                            <b id="prices__base"> ₽</b>
                        </div>
                        <div class="setup-options__total__price__options">
                            + цена дополнений
                            <b id="prices__options">0 ₽</b>
                        </div>
                    </div>
                    <div class="setup-options__total__buttons">
                        <div class="setup-options__total__button" id="create-request-button">Оформить заявку</div>
                        <div class="setup-options__total__button">Задать вопрос</div>
                    </div>

            </div>

        </div>
    
    </div>

</div>

<div class=popup id="options-popup">
    <div class="popup__wrapper">
        <div class="popup__container">
            <div class="popup__close"></div>
            <div class="popup__content">
                <?= do_shortcode('[contact-form-7 id="6" title="test" html_id="options-form"]')?>
            </div>
        </div>
    </div>
</div>

<script>

    const prices_model = {
        base: parseInt('<?= $base_price ?>'.replace(/ /g,'')),
        options: 0,
        total: function () {
            return this.base + this.options
        }
    }

    $(document).ready (() => {
        $('#create-request-button').on('click', () => {
            $('#options-popup').trigger('open');
        });
        $('#options-form').on ('wpcf7mailsent', () => {
            $('#options-form').addClass('sent');
        })
        $('.setup-option__price__add').on('click', (e) => {
            $(e.target).closest('.setup-options__table__tr').toggleClass('selected');
            calculate();
            show_prices();
            create_request_html();
        });
        show_prices();
        create_request_html();
    });

    function show_prices () {
        $('#prices__total').html(prices_model.total().toLocaleString() + ' ₽');
        $('#prices__base').html(prices_model.base.toLocaleString() + ' ₽');
        $('#prices__options').html(prices_model.options.toLocaleString() + ' ₽');
    }

    function calculate () {
        prices_model.options =
            $('.setup-options__table__tr.selected .setup-option__price__text')
            .toArray()
            .reduce((summ, item) => {
                return summ + parseInt($(item).html().replace(/ /g,''));
            }, 0);
    }

    function create_request_html () {

        let html ='';
        html +='Состав заказа: <br>';
        html +='Проект: <?= get_the_title() ?><br>';
        html +='Базовый набор опций: <?= $base_title ?><br>';
        html +='Дополнительные опции:<br>';
        html += $('.setup-options__table__tr.selected .setup-option__item__text')
            .toArray()
            .reduce((summ, item) => {
                return summ + '- ' + $(item).html() + '<br>';
            }, '');
        $('#setup-options__form__details').html(html);
        $('#options-form [name="my-options-title"]').val('<?= get_the_title() ?>');
        $('#options-form [name="my-options-base-title"]').val('<?= $base_title ?>');
        $('#options-form [name="my-options-options"]').val(
            $('.setup-options__table__tr.selected .setup-option__item__text')
            .toArray()
            .reduce((summ, item) => {
                return summ + $(item).html();
            }, '')
        );
        $('#options-form [name="my-options-base-price"]').val(prices_model.base.toLocaleString() + ' ₽');
        $('#options-form [name="my-options-options-price"]').val(prices_model.options.toLocaleString() + ' ₽');
        $('#options-form [name="my-options-total-price"]').val(prices_model.total().toLocaleString() + ' ₽');
    }

</script>


<!-- section-project-setup-options.php -->
<script>
    // option galleries
    // collect gallery images data
    const options_gallery_images = {};
    <?php

        foreach($options_post_IDs as $options_post_ID) {
            foreach(get_field ('materials', $options_post_ID) as $index=>$item) {
                ?>
                options_gallery_images['<?= $index . '---' . $options_post_ID?>'] = [];
                <?php
                if($item['photos']):foreach($item['photos'] as $image) {
                    ?>
                        options_gallery_images['<?= $index . '---' . $options_post_ID?>'].push('<?=$image?>') ;
                    <?php
                };
                endif;
            }
        }
    ?>
    // console.log (options_gallery_images);
    $(document).ready(() => {
        $('[options_popup_gallery_index]').on('click', e=> {
            let index = $(e.target).attr('options_popup_gallery_index');            
            if (options_gallery_images[index].length) {
                $(document).trigger('popup_gallery_open', JSON.stringify(options_gallery_images[index]));
            }
        })
    })
    
</script>

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
    .setup-options__table__tr.selected {
        background:  rgba(var(--col-white), 0.8);
        box-shadow: inset 0 0 0 3rem rgba(var(--col-green), 0.5);
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
        cursor: pointer;
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
        cursor: pointer;
    }
    .setup-option__price__add > span {
        overflow: hidden;
        display: block;
    }
    .setup-option__price__add__add {
        height: unset;
    }
    .setup-option__price__add__remove {
        height: 0;
    }
    .setup-options__table__tr.selected .setup-option__price__add {
        background: rgb(var(--col-dark-beige));
    }
    .setup-options__table__tr.selected .setup-option__price__add__add {
        height: 0;
    }
    .setup-options__table__tr.selected .setup-option__price__add__remove {
        height: unset;
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
        background-size: 30rem;
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

    #options-form {
        
    }
    #options-form input:not([type="submit"]){
        font-size: 16rem;
        color: rgb(var(--col-main));
        background: rgb(var(--col-white));
        border: 2px solid rgb(var(--col-dark-beige));
        outline: none;
        width: 100%;
        padding: 10rem 20rem;
    }
    #options-form input:not([type="submit"]):focus {
        border-color: rgb(var(--col-green));
    }
    #options-form input[type="submit"] {
        background: rgb(var(--col-green));
        color: rgb(var(--col-white));
        border-radius: 6rem;
        padding: 15rem 30rem;
        font-size: 18rem;
        text-align: center;
        width: fit-content;
        outline: none;
        border: none;
    }
    #options-form.sent .setup-options__form__input {
        display: none;
    }
    #options-form .wpcf7-response-output {
        margin: 20rem 0 0;
        padding: 20rem;
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