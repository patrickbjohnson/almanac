<?php 
function almanac_styles() {

    // wp_enqueue_style( 'symbolset', get_template_directory_uri() . '/css/ss-standard.css' );
    wp_enqueue_style( 'social-icons', get_template_directory_uri() . '/css/social-icons.css' );
	 wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '1.0.0', true );
	 wp_enqueue_script('jquery');

}

add_action( 'wp_enqueue_scripts', 'almanac_styles' );

?>