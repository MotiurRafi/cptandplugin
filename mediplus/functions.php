<?php

function myfirsttheme_setup()
{
    require_once 'admin/slider_cpt.php';
    require_once 'enqueue/enqueue.php';
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain('myfirsttheme', get_template_directory() . '/languages');


    /**
     * Enable support for the post formats:
     */
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_theme_support('html5', array('style', 'script'));
    add_theme_support('automatic-feed-links');
    add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'myfirsttheme'),
        'secondary' => __('Secondary Menu', 'myfirsttheme'),
    ));
}
add_action('after_setup_theme', 'myfirsttheme_setup');
