
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

            <div class="ask__grid__left">

                <div class="ask__title">
                    Задать вопрос
                </div>

            </div>

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

        </div>

    </div>

</div>

<!-- section-ask.php -->
<style>

    .ask {
        background: url('<?= get_field('about-bg', 31) ?>') no-repeat center/cover;
        padding: 30rem 0;
    }

    .ask__title {
        padding: 0 30rem;
        font-size: 48rem;
        color: rgb(var(--col-brown));
        font-weight: 300;
        letter-spacing: -0.03em;
    }
    
    .ask__grid {
        display: flex;
    }
    .ask__grid__left {
        min-width: 35%;
    }
    .ask__grid__right {
        flex-grow: 1;
    }

    .ask__form__grid {
        background: rgba(var(--col-white),0.8);
        padding: 30rem;
        display: flex;
    }
    .ask__form__grid > div {
        min-width: 50%;
        padding: 0 20rem;
    }
    .ask__form__grid > div > * {
        width: 100%;
        margin: 10rem 0;
        padding: 15rem 30rem;
    }
    .ask__form__grid  input,
    .ask__form__grid  textarea {
        font-size: 16rem;
        color: rgb(var(--col-main));
        background: rgb(var(--col-white));
        border: 2px solid rgb(var(--col-dark-beige));
        outline: none;
    }
    .ask__form__grid  input:focus,
    .ask__form__grid  textarea:focus {
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
    }
    
    @media screen and (max-width: 640px) {
        .ask {
            padding: 20rem 0;
        }
        
        .ask__title {
            font-size: 32rem;
            text-align: center;
            padding: 40rem 0;
        }
        .ask__grid {
            flex-direction: column;
        }
        .ask__form__grid {
            padding: 20rem 0;
            flex-direction: column;
            justify-content: center;
        }
        .ask__form__grid  input,
        .ask__form__grid  textarea {
            padding: 15rem 10rem;
            text-align: center;
        }
        
    }
</style>