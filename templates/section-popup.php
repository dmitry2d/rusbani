
<?php
/*
* Section Popup
*/
?>

<!-- 
HTML Example
<div class=popup id="test-popup">
    <div class="popup__wrapper hidden">
        <div class="popup__container">
            <div class="popup__close"></div>
            <div class="popup__content">
                // content here
            </div>
        </div>
    </div>
</div>

Script Example
$('#test-popup').trigger('open');

-->

<script>
    $(document).ready(() => {
        $('.popup').on('open', (e) => {
            $(e.target).addClass('open');
        });
        $('.popup').on('click', (e) => {
            if ($(e.target).hasClass('popup__wrapper')) {
                $(e.target).closest('.popup').removeClass('open');
            }
        });
        $('.popup__close').on('click', (e) => {
            $(e.target).closest('.popup').removeClass('open');
        });
        $('.popup').on('close', () => {
            $(e.target).closest('.popup').removeClass('open');
        });
    });
</script>
<style>
    .popup {
        display: none;
    }
    .popup.open {
        display: block;
    }
    .popup__wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        background: rgba(var(--col-main), 0.7);
        align-items: center;
        justify-content: center;
        z-index: 1000;
    } 
    .popup__container {
        width: min(90vw, 500rem);
        background: rgba(var(--col-white), 0.9);
        box-shadow: inset 0 0 0 6rem rgb(var(--col-dark-beige));
        padding: 60rem 40rem 40rem;
    }
    .popup__close {
        position: absolute;
        top: 25rem;
        right: 20rem;
        width: 40rem;
        height: 40rem;
        border-radius: 50rem;
        cursor: pointer;
        background: rgba(var(--col-dark-beige),1) url('<?= get_template_directory_uri(); ?>/src/images/hamburger__close.png') no-repeat center center;

    }
</style>