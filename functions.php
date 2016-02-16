<?php

add_action('wp_enqueue_scripts','dss_add_styles');

function dss_add_styles(){
    if ( is_home() ) :

        wp_enqueue_style('front-page', get_template_directory_uri() . '/Styles/index.css');
        wp_enqueue_script('main', get_template_directory_uri() . '/Scripts/JS/Manipulators/indexFeatureManipulator.js',array('jquery'),'null',true);

    elseif ( is_page_template('errorsite.php')) :

        wp_enqueue_style('errorsite', get_template_directory_uri() . '/Styles/errorsite.css');

    elseif ( is_page_template('archive.php') ):

        wp_enqueue_style('archive', get_template_directory_uri() . '/Styles/archive.css');

    elseif ( is_404() ):

        wp_enqueue_style('errorsite', get_template_directory_uri() . '/Styles/errorsite.css');

    endif;
}

add_theme_support('custom-header');


/*
// Menuer
*/
add_theme_support('menus');

register_nav_menus(array(
    'main-menu' => 'Topmenu',
));
