
<?php
/*
* Section instruction
*/
?>

<?php
    // print_pre (get_fields(31, 1));
?>

<div class="instruction">

    <div class="instruction__title">
        <div class="container">
            Инструкция по сайту
        </div>
    </div>

    <div class="instruction__grid">

        <div class="instruction__grid__bg">
            <img src="<?= get_field('instruction-bg', 31) ?>">
        </div>

        <div class="instruction__grid__items container">

            <div class="instruction__grid__left">

                <div class="instruction__video">
                    <iframe width="100%" height="100%"
                        src="<?= get_field('instruction-video', 31) ?>"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>

            </div>

            <div class="instruction__grid__right">

                <div class="instruction__text">
                <?= get_field('instruction-text', 31) ?>
                </div>

            </div>

        </div>
        
    </div>

</div>

<!-- section-instruction.php -->
<style>

    .instruction {
        background: rgb(var(--col-bg-beige));
        padding: 20rem 0;
    }

    .instruction__title {
        padding: 1em 0 0.5em;
        padding-left: 100rem;
        max-width: 40%;
        font-size: 48rem;
        color: rgb(var(--col-brown));
        font-weight: 400;
        line-height: 1;
    }
    
    .instruction__grid {
        padding: 50rem;
    }
    .instruction__grid__items {
        display: flex;
    }
    .instruction__grid__left {
        min-width: 55%;
        z-index: 2;
        order: 2;
    }
    .instruction__video {
        height: 410rem;
        margin-top: -50rem;
    }
    .instruction__video iframe {
        margin-top: -40rem;
        box-shadow: 0 0 40rem 0 rgba(var(--col-brown),0.7);
    }
    .instruction__grid__bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .instruction__grid__bg img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .instruction__grid__right {
        min-width: 45%
    }
    .instruction__text {
        padding: 50rem;
        font-size: 24rem;
        color: rgb(var(--col-main));
    }
    .instruction__grid__right:before {
        content: '';
        position: absolute;
        top: 0;
        right: -50%;
        bottom: 0;
        left: 0;
        background: #ffffff80;
    }

    @media screen and (max-width: 640px) {
        .instruction {
            padding: 0 0 20rem;
        }
        .instruction__title {
            margin-left: 0;
            padding: 20rem 0 60rem;
            font-size: 32rem;
            text-align: center;
            max-width: unset;
        }
        .instruction__grid {
            padding: 20rem 0;
        }
        .instruction__grid__items {
            flex-direction: column;
        }
        .instruction__grid__left {
            order: 1;
        }
        .instruction__grid__right {
            order: 2;
        }
        .instruction__video {
            height: 210rem;
            margin-top: -50rem;
        }
        .instruction__video iframe {
            margin-top: 0;
        }
        .instruction__grid__right:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background: #ffffff80;
        }
        .instruction__text {
            padding: 30rem;
            font-size: 16rem;
            text-align: center;
        }
    }
</style>