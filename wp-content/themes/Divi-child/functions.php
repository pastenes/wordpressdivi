<?php
/*-----------------------------------------------------------------------------------*/
/*                                     CODE START                                    */
/*-----------------------------------------------------------------------------------*/

// queue up parent theme styles first, then modifications in child theme stylesheet
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
    wp_enqueue_style( 'prefix-font-awesome', '//use.fontawesome.com/releases/v5.1.1/css/all.css', array(), '4.4.0' );
}

