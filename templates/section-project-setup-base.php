
<?php
/*
* Section Project - Base Setup
*/
?>

<?php
    global $post;
    $items = get_field('base-setup-options', $post->ID);
    $price  = get_field('base-setup-price', $post->ID);
    $picture  = get_field('base-setup-picture', $post->ID);
    $title = get_the_title($post->ID);
    if ($items) { 
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
                    foreach($items as $index=>$item) {
                ?>
                    <div class="setup-base__item">
                        <div class="setup-base__item__text">
                            <?= $item['material'] ?>
                        </div>
                        <div class="setup-base__item__pictures">
                            <?php if($item['images']): ?>
                                <img src="<?= get_template_directory_uri(); ?>/src/images/icons/setup-item-photo.png" popup_gallery_index="<?=$index?>">
                            <?php endif;?>
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

<?php
    }
?>


<!-- section-project-setup-base.php -->
<script>

    // collect gallery images data
    const gallery_images = {};
    <?php
        foreach($items as $index=>$item) {
            ?>
            gallery_images[<?= $index?>] = [];
            <?php
            if($item['images']):foreach($item['images'] as $image) {
                ?>
                    gallery_images[<?= $index?>].push('<?=$image?>') ;
                <?php
            };
            endif;
        }
    ?>
    $(document).ready(() => {
        $('[popup_gallery_index]').on('click', e=> {
            let index = $(e.target).attr('popup_gallery_index');
            if (gallery_images[index].length) {
                $(document).trigger('popup_gallery_open', JSON.stringify(gallery_images[index]));
            }
        })
    })
    
</script>


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
    .setup-base__item + .setup-base__item  {
        border-top: 1px solid rgba(var(--col-dark-beige),0.3);
        padding: 6rem 0;
    }
    .setup-base__item {
        font-size: 18rem;
        color: rgb(var(--col-main));
        display: flex;
        align-items: flex-start;
        padding: 5rem 0;
        transition: 0.3s;
    }
    .setup-base__item + .setup-base__item {
        border-top: 1px solid rgba(var(--col-dark-beige),0.3);
    }
    .setup-base__item:hover {
        background: rgba(var(--col-dark-beige),0.3);
        /* border-radius: 10rem; */
    }
    .setup-base__item__text {
        flex-grow: 1;
        padding: 5rem;
    }
    .setup-base__item__pictures {
        cursor: pointer;
        padding: 5rem;
        align-self: stretch;
    }
    .setup-base__item__pictures img {
        display: block;
        width: 24rem;
        height: 100%;
        object-fit: contain;
        object-position: center center;
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