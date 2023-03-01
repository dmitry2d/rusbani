<?php
/*
* Section Common
* Common Styles and Scripts
*/
?>

<!-- section-common.php -->

<style>
    
    @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    #wpadminbar {
        
        display: none;
    
    }
    

    :root {
        --col-main: 58,48,48;
        --col-bg-beige: 254,243,216;
        --col-dark-beige: 212,155,101;
        --col-white: 255,255,255;
        --col-green: 16,115,0;
        --col-brown: 98,41,0;
        --container-max-width: 1335px;
    }

    
    html {
        font-size: 1px;
        margin: 0!important;
        padding: 0;
        width: 100%;
    }
    
    body {
        font-size: 16rem;
        color: rgb(var(--col-main));
        margin: 0;
        padding: 0;
        width: 100%;
        overflow-x: hidden;
    }
    
    * {
        font-family: 'Rubik', sans-serif;
        box-sizing: border-box;
        position: relative;
    }

    .container {
        width: calc(100% - 80rem);
        max-width: var(--container-max-width);
        margin: 0 auto;
    }


    @media screen and (max-width: 1335px) {
        html {
            font-size: calc(100vw / 1335);
        }
    }

    @media screen and (max-width: 640px) {
        html {
            font-size: calc((35vw + 450px) / 640);
        }
        .container {
            width: calc(100% - 40rem);
            max-width: 100%;
            margin: 0 auto;
        }

    }



</style>

<script>
</script>