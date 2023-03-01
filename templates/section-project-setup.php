
<?php
/*
* Section Project - Setup
*/
?>



<div class="setup">

    <div class="container">
        <div class="setup__title">
            Варианты комплектаций
        </div>
    </div>

    <?php

        get_template_part('templates/section', 'project-setup-base');

        get_template_part('templates/section', 'project-setup-options');

    ?>


</div>


<!-- section-project-video.php -->
<style>

    .setup {
        background: rgb(var(--col-bg-beige));
        padding: 20rem 0 40rem;
    }

    .setup__title {
        padding: 40rem 0;
        font-size: 48rem;
        color: rgb(var(--col-brown));
        font-weight: 400;
        line-height: 1;
    }
    
    @media screen and (max-width: 640px) {

        .setup__title {
            margin-left: 0;
            padding: 20rem 0 40rem;
            font-size: 32rem;
            text-align: center;
            max-width: unset;
        }
       
    }
</style>