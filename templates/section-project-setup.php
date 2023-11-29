
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
        padding: 20rem 0 0;
    }
    .setup:before {
        position: absolute;
        content: '';
        right: 0;
        bottom: 0;
        width: 200rem;
        height: 200rem;
        /* background: url('<?= get_template_directory_uri(); ?>/src/images/struzhka.png') no-repeat top 5rem left; */
    }
   
    .setup__title {
        padding: 40rem 0 0;
        font-size: 48rem;
        color: rgb(var(--col-brown));
        font-weight: 400;
        line-height: 1;
    }
    
    @media screen and (max-width: 640px) {

        .setup__title {
            margin-left: 0;
            padding: 20rem 0 40rem;
            font-size: 37rem;
            text-align: left;
            max-width: unset;
        }
       
    }

</style>