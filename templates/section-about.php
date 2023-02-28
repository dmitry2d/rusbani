
<?php
/*
* Section About
*/
?>

<?php
    // print_pre (get_fields(31, 1));
?>

<div class="about">

    <div class="about__title">
        <div class="container">
            О компании
        </div>
    </div>

    <div class="about__grid">

        <div class="about__grid__bg">
            <img src="<?= get_field('about-bg', 31) ?>">
        </div>

        <div class="about__grid__items container">

            <div class="about__grid__left">

                <div class="about__video">
                    <iframe width="100%" height="100%"
                        src="<?= get_field('about-video', 31) ?>"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>

            </div>

            <div class="about__grid__right">

                <div class="about__text">
                    <?= get_field('about-text', 31) ?>
                </div>

            </div>

        </div>

    </div>

</div>

<!-- section-about.php -->
<style>

    .about {
        background: rgb(var(--col-bg-beige));
        padding: 20rem 0;
    }

    .about__title {
        margin-left: 55%;
        padding: 1em;
        padding-left: 50rem;
        font-size: 48rem;
        color: rgb(var(--col-brown));
        font-weight: 400;
    }
    
    .about__grid {
        padding: 50rem;
    }
    .about__grid__items {
        display: flex;
    }
    .about__grid__left {
        min-width: 55%;
        z-index: 2;
    }
    .about__video {
        height: 410rem;
        margin-top: -50rem;
    }
    .about__video iframe {
        margin-top: -40rem;
        box-shadow: 0 0 40rem 0 rgba(var(--col-brown),0.7);
    }
    .about__grid__bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .about__grid__bg img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .about__grid__right {
        min-width: 45%
    }
    .about__text {
        padding: 50rem;
        font-size: 24rem;
        color: rgb(var(--col-main));
    }
    .about__grid__right:before {
        content: '';
        position: absolute;
        top: 0;
        left: -50%;
        bottom: 0;
        right: 0;
        background: #ffffff80;
    }

    @media screen and (max-width: 640px) {
        .about {
            padding: 20rem 0 20rem;
        }
        .about__title {
            margin-left: 0;
            padding: 0 0 50rem;
            font-size: 32rem;
            text-align: center;
        }
        .about__grid {
            padding: 20rem 0;
        }
        .about__grid__items {
            flex-direction: column;
        }
        .about__video {
            height: 210rem;
            margin-top: -50rem;
        }
        .about__video iframe {
            margin-top: 0;
        }
        .about__grid__right:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background: #ffffff80;
        }
        .about__text {
            padding: 30rem;
            font-size: 16rem;
            text-align: center;
        }
    }
</style>