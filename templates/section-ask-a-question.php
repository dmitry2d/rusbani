
<?php
/*
* Section ask
*/
?>

<?php
    // print_pre (get_fields(31, 1));
?>

<div class="ask">

    <div class="container">

        <div class="ask__grid">
<!-- 
            <div class="ask__grid__left">
            </div> -->
            
            <div class="ask__grid__right">
                <div class="ask__title" id=ask_anchor>
                    Задать вопрос
                </div>
                <?= do_shortcode('[contact-form-7 id="164" title="test" html_id="contact-form"]')?>
            </div>

            <!--
                Original form html:         
                <div class="ask__grid__right">
                    <div class="ask__form__grid">
                        <div>
                            <input type="text">
                            <input type="text">
                        </div>
                        <div>
                            <textarea name="" id="" cols="30" rows="10">
                            </textarea>
                            <div class="ask__form__button">
                                Отправить
                            </div>
                        </div>
                    </div>
                </div>
            -->

        </div>

    </div>

</div>

<!-- section-ask-a-question.php -->
<style>

    .ask {
        background: url('<?= get_field('about-bg', 31) ?>') no-repeat center/cover;
        padding: 30rem 0;
    }
    .ask__title {
        padding: 30rem 50rem 0;
        font-size: 48rem;
        color: rgb(var(--col-brown));
        font-weight: 300;
        letter-spacing: -0.03em;
    }
    
    .ask__grid {
        display: flex;
        max-width: 100%;
        overflow: hidden;
        align-items: center;
        justify-content: center;
    }
    .ask__grid__left {
        min-width: 35%;
    }
    .ask__grid__right {
        min-width: 65%;
        background: rgba(var(--col-white),0.8);
    }
    .ask__form__grid {
        padding: 30rem 30rem 0;
        display: flex;
    }
    .ask__form__grid > div {
        min-width: 50%;
        padding: 0 20rem;
    }
    .ask__form__grid input:not([type="submit"]),
    .ask__form__grid textarea {
        font-size: 16rem;
        color: rgb(var(--col-main));
        background: rgb(var(--col-white));
        border: 2px solid rgb(var(--col-dark-beige));
        outline: none;
        max-width: 100%;
        padding: 10rem 20rem;
    }
    .ask__form__grid input:not([type="submit"]):focus,
    .ask__form__grid textarea:focus {
        border-color: rgb(var(--col-green));
    }
    .ask__form__button {
        background: rgb(var(--col-green));
        color: rgb(var(--col-white));
        border-radius: 6rem;
        padding: 15rem 30rem;
        font-size: 18rem;
        text-align: center;
        width: fit-content;
        margin-top: 20rem;
        border: 0;
        outline: none;
    }
    .ask .wpcf7 form .wpcf7-response-output {
        padding: 20rem;
        margin: 0 40rem 20rem;
    }

    
    @media screen and (max-width: 640px) {
        .ask {
            padding: 0;
            max-height: 0;
            overflow: hidden;
            transition: 0.5s;
        }
        body.open-ask-a-question .ask {
            max-height: 1000px;
        }
        .ask__title {
            font-size: 32rem;
            text-align: center;
            padding: 40rem 0 0;
        }
        .ask__grid {
            flex-direction: column;
            margin: 20rem 0;
        }
        .ask__form__grid {
            padding: 20rem 20rem 0;
            flex-direction: column;
            justify-content: center;
        }
        .ask__form__grid > * {
            align-items: center;
        }

        .ask__form__grid  input,
        .ask__form__grid  textarea {
            padding: 15rem 10rem;
            /* text-align: center; */
        }
        .ask .wpcf7 form .wpcf7-response-output {
            padding: 20rem;
            margin: 0 20rem 20rem;
        }
        .ask__form__grid input, .ask__form__grid textarea {
            width: 100%;
        }
    }
</style>

<!-- templates/section-ask-a-question.php -->
<script>
    $(document).ready(() => {
        $('.setup-options__total__button').click(() => {
            $('body').addClass('open-ask-a-question');
        })
    })
</script>