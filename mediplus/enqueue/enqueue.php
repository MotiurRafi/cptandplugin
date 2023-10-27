<?php 
function add_theme_scripts()
{
    // enqueue the css files
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', true, '1.0');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', true, '1.0');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', true, '1.0');
    wp_enqueue_style('datepicker', get_template_directory_uri() . '/assets/css/datepicker.css', true, '1.0');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', true, '1.0');
    wp_enqueue_style('icofont', get_template_directory_uri() . '/assets/css/icofont.css', true, '1.0');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', true, '1.0');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', true, '1.0');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', true, '1.0');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl-carousel.css', true, '1.0');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', true, '1.0');
    wp_enqueue_style('slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css', true, '1.0');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap');

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('bootstrap-datepicker', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js', array('jquery'), 1.1, true);
    wp_enqueue_script('colors', get_template_directory_uri() . '/assets/js/colors.js', array('jquery'), 1.1, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/easing.js', array('jquery'), 1.1, true);
    wp_enqueue_script('gmaps', get_template_directory_uri() . '/assets/js/gmaps.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('jquery-nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), 1.1, true);
    wp_enqueue_script('jquery-scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 1.1, true);
    wp_enqueue_script('map-active', get_template_directory_uri() . '/assets/js/map-active.js', array('jquery'), 1.1, true);
    wp_enqueue_script('niceselect', get_template_directory_uri() . '/assets/js/niceselect.js', array('jquery'), 1.1, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl-carousel.js', array('jquery'), 1.1, true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/slicknav.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('steller', get_template_directory_uri() . '/assets/js/steller.js', array('jquery'), 1.1, true);
    wp_enqueue_script('tilt-jquery', get_template_directory_uri() . '/assets/js/tilt.jquery.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('jquery.min', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('jquery-ui.min', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('jquery-migrate-3.0.0', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.0.js', array('jquery'), 1.1, true);
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');
