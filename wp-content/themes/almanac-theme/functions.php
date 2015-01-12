<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');

require_once('library/custom-post-types.php');

function almanac_styles() {

    wp_enqueue_style( 'symbolset', get_template_directory_uri() . '/css/ss-standard.css' );
    wp_enqueue_style( 'symbolset', get_template_directory_uri() . '/css/ss-social-circle.css' );
    wp_enqueue_style( 'social-icons', get_template_directory_uri() . '/fonts/social-icons.css' );
	    wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '1.0.0', true );
wp_enqueue_script('jquery');

}

add_action( 'wp_enqueue_scripts', 'almanac_styles' );

?>