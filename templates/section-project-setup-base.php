
<?php
/*
* Section Project - Base Setup
*/
?>

<?php
    global $post;
    $title = get_field('base-options_name', $post->ID);
    $categories = get_field('base-options_categories', $post->ID) ?: [];
    $picture  = get_field('base-setup-picture', $post->ID);
    $price  = get_field('base-setup-price', $post->ID);
?>

<script>
    // collect gallery images data
    const base_setup_gallery_images = {};
</script>
<div class="setup-base">

    <div class="container">
        
        <div class="setup-base__title">
            <?= $title ?>
        </div>
        
            <div class="setup-base__table">

                <div class="setup-base__table__categories">

                    <?php
                        foreach($categories as $index=>$item):
                            $category = ($item['base-options_catergory']);
                    ?>
                    <script>
                        // collect gallery images data
                        base_setup_gallery_images[<?=$index?>] = {};
                    </script>
                    <div class="setup-base__table__category">

                        <div class="setup-base__table__title" collect-form-data="request__base__options">
                            <?= $category["base-options_catergory_name"]?> 
                        </div>
                        <div class="setup-base__items">

                            <?php
                                foreach($category['base-options_catergory_items'] as $item_index=>$cat_item) {
                            ?>
                            <div class="setup-base__item">
                                <div class="setup-base__item__text">
                                    <?= $cat_item['name'] ?>
                                </div>
                                <?php
                                    if ($cat_item['images']):
                                ?>
                                <script>
                                    // collect gallery images data
                                    base_setup_gallery_images[<?=$index?>][<?=$item_index?>] = [];
                                </script>
                                    <?php
                                        foreach($cat_item['images'] as $image):
                                    ?>
                                    <script>
                                        base_setup_gallery_images[<?=$index?>][<?=$item_index?>].push('<?=$image['url']?>');
                                    </script>
                                    <?php
                                        endforeach;
                                    ?>
                                    <div class="setup-base__item__pictures">
                                        <img src="<?= get_template_directory_uri(); ?>/src/images/icons/setup-item-photo.png" category_gallery_index="<?=$index?>" category_gallery_item_index="<?=$item_index?>">
                                    </div>
                                <?php
                                  endif;    
                                ?>
                            </div>
                            <?php
                                }
                            ?>

                        </div>

                    </div>
                    <?php
                        endforeach;
                    ?>

                </div>


                <div class="setup-base__item__price">
                    <span>Цена базовой комплектации</span>
                    <b><?= $price ?>₽</b>
                </div>
                <div class="setup-base__item__picture">
                    <img src="<?= $picture ?>" alt="">
                </div>
            </div>

        </div>
    </div>
    
</div>

<!-- section-project-setup-base.php -->
<script>


    $(document).ready(() => {
        $('[category_gallery_item_index]').on('click', e=> {
            let category_index = $(e.target).attr('category_gallery_index');
            let item_index = $(e.target).attr('category_gallery_item_index');
            let image_array = base_setup_gallery_images[category_index][item_index];
            if (image_array.length) {
                $(document).trigger('popup_gallery_open', JSON.stringify(image_array));
            }
        })
    })
    
</script>


<!-- section-project-setup-base.php -->
<style>
    .setup-base {
        background: rgba(var(--col-dark-beige), 0.1);
        padding: 20rem 0 40rem;
        margin-top: 40rem;
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
    .setup-base__table__categories {
        flex-grow: 1;
        padding: 20rem 0;
    }
    .setup-base__table__category {
        display: flex;
        align-items: center;
    }
    .setup-base__table__category {
        margin: 0 40rem;
    }
    .setup-base__table__category:not(:last-child) {
        border-bottom: 1px solid rgb(var(--col-dark-beige));
    }
    .setup-base__table__title {
        font-size: 24rem;
        padding: 20rem 0;
        color: rgb(var(--col-main));
        width: 30%;
        max-width: 30%;
        font-weight: 500;
    }
    .setup-base__items {
        display: flex;
        flex-direction: column;
        padding: 20rem 0 20rem 30rem;
        flex-grow: 1;
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
        flex-basis: 0;
        background: rgba(var(--col-white), 0.5);
        color: rgb(var(--col-brown));
        padding: 40rem;
        font-size: 27rem;
        font-weight: 600;
    }
    .setup-base__item__price b{
        display: block;
        white-space: nowrap;
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
            margin-top: 0;
        }
        .setup-base__title {
            font-size: 24rem;
        }
        .setup-base__table {
            flex-direction: column;
            padding: 40rem;
        }
        .setup-base__table__categories {
            margin: -20rem 0;
            padding: 0;
        }
        .setup-base__table__category {
            flex-direction: column;
            align-items: flex-start;
            margin: 20rem 0 40rem;
        }
        .setup-base__table > div {
            min-width: 100%;
            width: 100%;
        }
        .setup-base__table__title {
            width: 100%;
            max-width: 100%;
        }
        .setup-base__items {
            width: 100%;
        }
        .setup-base__item__picture {
            display: none;
        }
        .setup-base__item__price {
            /* display: none; */
        }
        .setup-base__table__title {
            padding: 0 0 10rem;
            font-size: 26rem;
            font-weight: 500;
        } 
        .setup-base__items {
            padding: 0;
        }
        .setup-base__item__text {
            padding-left: 0;
        }
        .setup-base__item__price {
            display: flex;
            background: none;
            padding: 0;
            align-items: center;
            margin-top: 10rem;
            padding-top: 15rem;
            border-top: 2px solid rgba(var(--col-dark-beige),0.7);
        }
        .setup-base__item__price > span {
            font-size: 15rem;
            line-height: 1;
            flex-grow: 1;
        }
        .setup-base__item__price > b {
            white-space: nowrap;
            font-size: 34rem;
            font-weight: 500;
            padding-left: 10rem;
        }
       
    }
</style>