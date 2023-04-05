
<?php
/*
* Section Project Photo
*/
?>

<?php
    global $post;
    $photos = get_field('photos', $post -> ID);
    // print_pre (get_fields($post -> ID));
?>


<div class="project-photo">
    
    <div class="project-photo__items">

    <?php
        foreach ($photos as $photo) {
    ?>

        <div class="project-photo__item">
            <a href="<?= $photo ?>">
                <img src="<?= $photo ?>">
            </a>
        </div>

    <?php
        }
    ?>

    </div>

    <!-- <div class="project-photo__title">
        <div class="container">
            <div class="project-photo__title__wrapper"> -->
                <?php 
                    // echo get_the_title();
                ?>
            <!-- </div>
        </div>
    </div> -->

</div>

<!-- section-project-photo.php -->

<style>
    .project-photo__title {
        position: absolute;
        left: 0;
        width: 100%;
        bottom: 70rem;
        z-index: 2;
    }
    .project-photo__title__wrapper {
        display: inline-block;
        padding: 30rem 60rem;
        background: rgba(var(--col-dark-beige), 0.9);
        color: rgb(var(--col-white));
        font-size: 61rem;
        font-weight: 600;
        text-transform:uppercase;
        letter-spacing: 0.8;
    }
    .project-photo__items {
        display: flex;
        width: 100%;
        align-items: stretch;
    }
    .project-photo__item {
        display: flex;
        height: 700rem;
        width: 100vw;
    }
    .project-photo__item img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
        object-position: center center;
    }
    .project-photo__items__prev-arrow,
    .project-photo__items__next-arrow {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100rem;
        background: url('<?= get_template_directory_uri(); ?>/src/images/go-big-passive.png') no-repeat center center;
        background-size: 100% auto;
        cursor: pointer;
        transition: 0.2s;
        z-index: 10;
    }
    .project-photo__items__next-arrow {
        right: 0;
        transform: scale(-1,1);
    }
    .project-photo__items__prev-arrow:hover,
    .project-photo__items__next-arrow:hover {
        background-image: url('<?= get_template_directory_uri(); ?>/src/images/go-big-active.png');
    }
    @media screen and (max-width: 640px) {
        .project-photo__title {
            position: absolute;
            left: 20rem;
            right: 20rem;
            width: auto;
            bottom: 30rem;
            z-index: 2;
        }
        .project-photo__title .container {
            width: 100%;
            max-width: 100%;
            margin: 0;
        }
        .project-photo__title__wrapper {
            display: inline-block;
            padding: 10rem 30rem;
            font-size: 24rem;
        }
        .project-photo__item {
            display: flex;
            height: 250rem;
            width: 100vw;
        }
        .project-photo__items__prev-arrow,
        .project-photo__items__next-arrow {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 30rem;
            background: url('<?= get_template_directory_uri(); ?>/src/images/go-passive-small.png') no-repeat center center;
            background-size: 100% auto;
            cursor: pointer;
            transition: 0.2s;
            z-index: 10;
        }
        .project-photo__items__prev-arrow:hover,
        .project-photo__items__next-arrow:hover {
            background-image: url('<?= get_template_directory_uri(); ?>/src/images/go-active-small.png');
        }
    }
</style>

<!-- section-project-photo.php -->

<script>
    $(document).ready(function(){
        $('.project-photo__items').slick({
            prevArrow: '<div class="project-photo__items__prev-arrow"></div>',
            nextArrow: '<div class="project-photo__items__next-arrow"></div>'
        });
    });

</script>
