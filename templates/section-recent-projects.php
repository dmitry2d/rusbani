
<?php
/*
* Section Recent Projects
*/
?>

<?php
    global $post;
?>

<?php
    $items = get_posts (array(
        'category' => 5,
        'numberposts' => 100,
        'meta_query'    => array(
            'relation'      => 'OR',
            array(
                'key'       => 'hide',
                'value'     => 0,
                'compare'   => '='
            ),
            array(
                'key'       => 'hide',
                'compare' => 'NOT EXISTS'
            )
        )
    ));
?>

<div class="recent-projects">

    <div class="container">

        <div class="recent-projects__items">

            <?php
                foreach($items as $item) {
            ?>

                <div class="recent-projects__item <?= ($post -> ID === $item -> ID)?'active':'' ?>">
                    <a href="<?= get_permalink($item -> ID)?>"><?= get_the_title($item -> ID)?></a>
                </div>

            <?php
                }
            ?>

        </div>

    </div>

</div>

<!-- section-recent-projects.php -->
<style>

    .recent-projects {
        background: rgb(var(--col-bg-beige));
        padding: 20rem 0;
    }
    .recent-projects__items {
        display: flex;
    }
    .recent-projects__item {
        padding: 6rem 10rem;
        border-radius: 4rem;
        background: rgb(var(--col-white));
    }
    .recent-projects__item + .recent-projects__item {
        margin-left: 4px;
    }
    .recent-projects__item a {
        font-size: 16rem;
        color: rgb(var(--col-main));
        text-decoration: none;
        font-weight: 500;
    }
    .recent-projects__item.active {
        background: rgb(var(--col-brown));
    }
    .recent-projects__item.active a {
        color: rgb(var(--col-white));
    }
    
    @media screen and (max-width: 640px) {
        .recent-projects {
            width: 100%;
            overflow-x: auto;
        }
        .recent-projects__items {
            display: flex;
            width: fit-content;
        }
        .recent-projects__item {
            white-space: nowrap;
            font-size: 13rem;
        }
        .recent-projects__item:last-child {
            margin-right: 20rem;
        }
    }

</style>

