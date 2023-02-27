
<?php

    if (!$IS_DEV) {
        exit();
    };
    
    get_template_part('templates/page', 'main');

?>