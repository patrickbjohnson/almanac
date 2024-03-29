<?php

if (!function_exists('FoundationPress_scripts')) :
  function FoundationPress_scripts() {

    // deregister the jquery version bundled with wordpress
    wp_deregister_script( 'jquery' );

    // register scripts
    wp_register_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '1.0.0', false );

    wp_register_script( 'foundation', get_template_directory_uri() . '/js/foundation.js', array('jquery'), '1.0.0', true );
    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );

    // google maps
    wp_register_script( 'google_maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBrHWZzUP6D3wfqBNVd9VHPgo0D1M_KzY0', array('jquery'), '1.0.0', true );

    // enqueue scripts
    wp_enqueue_script('modernizr');
    wp_enqueue_script('foundation');
    wp_enqueue_script('google_maps');
    wp_enqueue_script('main');


    


  }

  add_action( 'wp_enqueue_scripts', 'FoundationPress_scripts' );
endif;




?>