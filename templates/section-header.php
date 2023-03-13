<?php
/*
* Section Header
*/
?>

<html class="rusbanika">

    <head>
        <meta charset="utf-8">
        <meta name=”format-detection” content=”telephone=no”>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <title>Русбани-Ка <?php wp_title(); ?></title>
        <?php wp_head(); ?>

        <!-- jQuery -->
        <script
            src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
            integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
            crossorigin="anonymous">
        </script>
        
        <!-- Slick Slider -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script
            type="text/javascript"
            src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js">
        </script>

        <!-- Common Styles And Scripts -->
        <?php
            get_template_part ('templates/section', 'common');
        ?>

    </head>
    
    <?php get_template_part('templates/section', 'popup'); ?>

    <body>