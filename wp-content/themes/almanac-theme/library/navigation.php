<?php

/**
 * Register Menus
 * http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 */
// register_nav_menus(array(
//     'top-bar-l' => 'Left Top Bar', // registers the menu in the WordPress admin menu editor
//     'top-bar-r' => 'Right Top Bar',
//     'mobile-off-canvas' => 'Mobile'
// ));


/**
 * Left top bar
 * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
// if ( ! function_exists( 'foundationPress_top_bar_l' ) ) {
// 	function foundationPress_top_bar_l() {
// 	    wp_nav_menu(array( 
// 	        'container' => false,                           // remove nav container
// 	        'container_class' => '',                        // class of container
// 	        'menu' => '',                                   // menu name
// 	        'menu_class' => 'top-bar-menu left',            // adding custom nav class
// 	        'theme_location' => 'top-bar-l',                // where it's located in the theme
// 	        'before' => '',                                 // before each link <a> 
// 	        'after' => '',                                  // after each link </a>
// 	        'link_before' => '',                            // before each link text
// 	        'link_after' => '',                             // after each link text
// 	        'depth' => 5,                                   // limit the depth of the nav
// 	        'fallback_cb' => false,                         // fallback function (see below)
// 	        'walker' => new top_bar_walker()
// 	    ));
// 	}
// }

/**
 * Right top bar
 */
// if ( ! function_exists( 'foundationPress_top_bar_r' ) ) {
// 	function foundationPress_top_bar_r() {
// 	    wp_nav_menu(array( 
// 	        'container' => false,                           // remove nav container
// 	        'container_class' => '',                        // class of container
// 	        'menu' => '',                                   // menu name
// 	        'menu_class' => 'top-bar-menu right',           // adding custom nav class
// 	        'theme_location' => 'top-bar-r',                // where it's located in the theme
// 	        'before' => '',                                 // before each link <a> 
// 	        'after' => '',                                  // after each link </a>
// 	        'link_before' => '',                            // before each link text
// 	        'link_after' => '',                             // after each link text
// 	        'depth' => 5,                                   // limit the depth of the nav
// 	        'fallback_cb' => false,                         // fallback function (see below)
// 	        'walker' => new top_bar_walker()
// 	    ));
// 	}
// }

/**
 * Mobile off-canvas
 */
// if ( ! function_exists( 'foundationPress_mobile_off_canvas' ) ) {
// 	function foundationPress_mobile_off_canvas() {
// 	    wp_nav_menu(array( 
// 	        'container' => false,                           // remove nav container
// 	        'container_class' => '',                        // class of container
// 	        'menu' => '',                                   // menu name
// 	        'menu_class' => 'off-canvas-list',              // adding custom nav class
// 	        'theme_location' => 'mobile-off-canvas',        // where it's located in the theme
// 	        'before' => '',                                 // before each link <a> 
// 	        'after' => '',                                  // after each link </a>
// 	        'link_before' => '',                            // before each link text
// 	        'link_after' => '',                             // after each link text
// 	        'depth' => 5,                                   // limit the depth of the nav
// 	        'fallback_cb' => false,                         // fallback function (see below)
// 	        'walker' => new top_bar_walker()
// 	    ));
// 	}
// }

/** 
 * Add support for buttons in the top-bar menu: 
 * 1) In WordPress admin, go to Apperance -> Menus. 
 * 2) Click 'Screen Options' from the top panel and enable 'CSS CLasses' and 'Link Relationship (XFN)'
 * 3) On your menu item, type 'has-form' in the CSS-classes field. Type 'button' in the XFN field
 * 4) Save Menu. Your menu item will now appear as a button in your top-menu
*/
if ( ! function_exists( 'add_menuclass') ) {
	function add_menuclass($ulclass) {
	    $find = array('/<a rel="button"/', '/<a title=".*?" rel="button"/');
	    $replace = array('<a rel="button" class="button"', '<a rel="button" class="button"');
	    
	    return preg_replace($find, $replace, $ulclass, 1);
	}
	add_filter('wp_nav_menu','add_menuclass');
}

/** 
 * Support for regular menu
*/


// function register_menus() {
// 	register_nav_menus(
// 		array(
// 			'main-nav-left' => 'Main Navigation Left Side',
// 			'main-nav-right' => 'Main Navigation Right Side'
// 		)
// 	);
// }
// add_action( 'init', 'register_menus' );


// function main_navigation_left() {
// 	    wp_nav_menu(array( 
// 	        'container' 				=> '',						// remove nav container
// 	        'container_class' 		=> 'main-nav-left',		// class of container
// 	        'container_id'    		=> 'main-nav-left',   	// class of id
// 	        'menu' 						=> '',                   // menu name
// 	        'menu_class' 			=> 'main-nav-left',    // adding custom nav class
// 	        'theme_location' 		=> 'main-nav-left',    // where it's located in the theme
// 	        'before'				 	=> '',                   // before each link <a> 
// 	        'after' 					=> '',                   // after each link </a>
// 	        'link_before' 			=> '',                  	// before each link text
// 	        'link_after' 				=> '',                   // after each link text
// 	        'depth' 					=> 5,                    // limit the depth of the nav
// 	        'fallback_cb' 			=> false                 // fallback function (see below)
// 	    ));
// 	}

	// function main_navigation_right() {
	// 	    wp_nav_menu(array( 
	//         'container' 			=> '',							// remove nav container
	//         'container_class' 	=> 'main-nav-right',		// class of container
	//         'container_id'    	=> 'main-nav-right',		// class of id
	//         'menu' 					=> '',							// menu name
	//         'menu_class' 		=> 'main-nav-right',		// adding custom nav class
	//         'theme_location' 	=> 'main-nav-right',		// where it's located in the theme
	//         'before' 				=> '',							// before each link <a> 
	//         'after' 				=> '',							// after each link </a>
	//         'link_before' 		=> '',							// before each link text
	//         'link_after' 			=> '',							// after each link text
	//         'depth' 				=> 5,								// limit the depth of the nav
	//         'fallback_cb' 		=> false							// fallback function (see below)
	// 	    ));
	// 	}


		// clean these navigations up!
		function theme_menu_left() {
		    register_nav_menu( 'left', 'Main Navigation Left' );
		}
		add_action( 'init', 'theme_menu_left' );
		// clean these navigations up!
		function theme_menu_right() {
		    register_nav_menu( 'right', 'Main NavigationRight' );
		}
		add_action( 'init', 'theme_menu_right' );

?>
