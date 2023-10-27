<?php

function medi_plus_slider()
{
    $labels = array(
        'name'                  => _x('Sliders', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Slider', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Slider', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Slider', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'menu_icon'          => 'dashicons-slides',
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'book'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 3,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    );

    register_post_type('medislider', $args);
}

add_action('init', 'medi_plus_slider');


// Function to display the custom metabox// Function to display the custom metabox
function custom_template_metabox() {
    add_meta_box(
        'medislider-template-metabox', // Unique ID
        'Buttons', // Metabox title
        'display_custom_template_metabox', // Callback function to display the metabox content
        'medislider', // Post type where you want to display the metabox
        'normal', // Metabox position
        'default' // Priority
    );
}

add_action('add_meta_boxes', 'custom_template_metabox');

// Callback function to display the metabox content
function display_custom_template_metabox($post) {
    // Retrieve the saved values (if any)
    $appointment_button_text = get_post_meta($post->ID, '_appointment_button_text', true);
    $appointment_button_url = get_post_meta($post->ID, '_appointment_button_url', true);
    $more_button_text = get_post_meta($post->ID, '_more_button_text', true);
    $more_button_url = get_post_meta($post->ID, '_more_button_url', true);
    ?>
    <label for="appointment_button_text" style="display: block;">Appointment Button Text:</label>
    <input style="display: block;width:-webkit-fill-available;" type="text" id="appointment_button_text" name="appointment_button_text" value="<?php echo esc_attr($appointment_button_text); ?>">
    <label style="display: block;" for="appointment_button_url">Appointment Button URL:</label>
    <input style="display: block;width:-webkit-fill-available;" type="url" id="appointment_button_url" name="appointment_button_url" value="<?php echo esc_url($appointment_button_url); ?>">
    
    <label for="more_button_text" style="display: block;">More Button Text:</label>
    <input style="display: block;width:-webkit-fill-available;" type="text" id="more_button_text" name="more_button_text" value="<?php echo esc_attr($more_button_text); ?>">
    <label style="display: block;" for="more_button_url">More Button URL:</label>
    <input style="display: block;width:-webkit-fill-available;" type="url" id="more_button_url" name="more_button_url" value="<?php echo esc_url($more_button_url); ?>">
    <?php
}

function save_custom_template_metabox($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (isset($_POST['appointment_button_text'])) {
        update_post_meta($post_id, '_appointment_button_text', sanitize_text_field($_POST['appointment_button_text']));
    }
    if (isset($_POST['appointment_button_url'])) {
        update_post_meta($post_id, '_appointment_button_url', esc_url($_POST['appointment_button_url']));
    }
    
    if (isset($_POST['more_button_text'])) {
        update_post_meta($post_id, '_more_button_text', sanitize_text_field($_POST['more_button_text']));
    }
    if (isset($_POST['more_button_url'])) {
        update_post_meta($post_id, '_more_button_url', esc_url($_POST['more_button_url']));
    }
}

add_action('save_post', 'save_custom_template_metabox');
