


<?php
/*
* Section Popup Gallery
*/
?>


<div class='popup-gallery'>
    <div class=popup id="popup-gallery">
        <div class="popup__wrapper">
            <div class="popup__container">
                <div class="popup__close"></div>
                <div class="popup__content">
                    <div id="popup-gallery__items"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('popup_gallery_open', (e, data) => {
        let images = JSON.parse(data);
        let node = $('#popup-gallery__items');
        node.html();
        for (let image of images) {
            node.append(`
                <div class="popup-gallery__item">
                    <div class="popup-gallery__item__image">
                        <img src="${image}">
                    </div>
                </div>
            `);
        }
        $('#popup-gallery').addClass('open');
        try {
            node.slick('unslick');
        } catch(e){}
        node.slick({
            prevArrow: '<div class="popup-gallery__prev-arrow"></div>',
            nextArrow: '<div class="popup-gallery__next-arrow"></div>'
        });
    });
</script>

<style>
    .popup-gallery .slick-track {
        display: flex;
    }
    .popup-gallery .popup__container {
        width: min(90vw, 800rem);
        padding: 10rem;
        box-shadow: inset 0 0 0 11rem rgb(var(--col-dark-beige));
    }
    .popup-gallery .popup__close {
        position: absolute;
        top: 0rem;
        right: 0rem;
        width: 75rem;
        height: 75rem;
        border-radius: 0;
        cursor: pointer;
        background: rgba(var(--col-dark-beige),1) url('<?= get_template_directory_uri(); ?>/src/images/hamburger__close.png') no-repeat center center;
        z-index: 1000;
    }
    .popup-gallery__item__image {
        height: 0;
        padding-bottom: 100%;
    }
    .popup-gallery__item img {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .popup-gallery__prev-arrow,
    .popup-gallery__next-arrow {
        position: absolute;
        left: -9rem;
        top: 0;
        bottom: 0;
        width: 75rem;
        background: url('<?= get_template_directory_uri(); ?>/src/images/go-big-active.png') no-repeat center center;
        background-size: 75rem auto;
        cursor: pointer;
        transition: 0.2s;
        z-index: 100;
    }
    .popup-gallery__next-arrow {
        left: unset;
        right: -9rem;
        transform: scale(-1,1);
    }

    @media screen and (max-width: 640px) {
        .popup-gallery .popup__close {
            width: 45rem;
            height: 45rem;
        }
        .popup-gallery__prev-arrow,
        .popup-gallery__next-arrow {
            width: 45rem;
            background: url('<?= get_template_directory_uri(); ?>/src/images/go-active.png') no-repeat center center;
            background-size: 45rem;
        }
    }
</style>