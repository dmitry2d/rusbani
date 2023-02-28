<?php
/*
*   Index Page Template
*/
?>

<?php
    if (!$IS_DEV) {
        get_template_part('templates/page', 'welcome');
        exit();
    };
    get_template_part('templates/page', 'main');
?>