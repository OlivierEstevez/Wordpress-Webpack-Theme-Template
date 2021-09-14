<?php

defined( 'ABSPATH' ) || exit;

function add_scripts() {

    // CSS
    wp_register_style("style", get_template_directory_uri() . "/_build/style.css", [], 1, "all");
    wp_enqueue_style("style");

    // JS
    wp_register_script("main-js", get_template_directory_uri() . "/_build/index.js", [], 1, true);
    wp_enqueue_script("main-js");

}

// Add Scripts
add_action("wp_enqueue_scripts", "add_scripts");

// Menus
add_theme_support( 'menus' );

?>


<!--
Remember to add these in wp-config.php
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );
-->