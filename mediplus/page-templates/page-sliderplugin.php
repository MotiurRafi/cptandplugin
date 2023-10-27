<?php /* Template Name: Slider Plugin */ ?>

<?php 

the_post();

get_header();

the_content();
get_template_part( './template-parts/slider', 'slider' );


get_footer();