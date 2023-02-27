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
        --col-bg-beige: #FEF3D8;
        --col-white: #FFFFFF;
        --col-bg-green: rgba(16, 115, 0, 0.9);
        --container-max-width: 1335px;
    }

    
    html {
        font-size: 1px;
        margin: 0!important;
        padding: 0;
    }
    
    body {
        font-size: 16rem;
        margin: 0;
        padding: 0;
    }
    
    * {
        font-family: 'Rubik', sans-serif;
        box-sizing: border-box;
        position: relative;
    }

    .container {
        width: calc(100% - 40rem);
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
            font-size: 1px;
        }
    }



</style>

<script>
</script>