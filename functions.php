<?php

    // Displaying only errors
    define( 'WP_DEBUG_DISPLAY', false );
    define( 'WP_DEBUG', false );
    @ini_set( 'display_errors', 1);

    // Detect Dev by ip
    $DEV_IP_LIST = array('79.99.54.92','89.252.111.18');
    $IS_DEV = in_array($_SERVER['REMOTE_ADDR'], $DEV_IP_LIST);
    
    // Print formatted
    function print_pre($content) {
        echo '<pre>';
        print_r($content);
        echo '</pre>';
    }

?>