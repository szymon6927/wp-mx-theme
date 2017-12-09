<?php 
    // Register Nav Walker class_alias
    require_once('wp_bootstrap_navwalker.php');

    // Theme Support 
    function wpb_theme_setup() {
        add_theme_support('post-thumbnails');
        // Nav menus
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));

    }

    add_action('after_setup_theme', 'wpb_theme_setup');

    // Excerpt Length Control
    function set_exception_length() {
        return 25;
    }

    add_filter('excerpt_length', 'set_exception_length')
?>