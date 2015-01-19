<?php 
// Register Custom Post Type
function almanac_press() {

	$labels = array(
		'name'                		=> _x( 'Press Clips', 'Post Type General Name', 'text_domain' ),
		'singular_name'      	=> _x( 'Press', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           	=> __( 'Press', 'text_domain' ),
		'parent_item_colon'   	=> __( 'Parent Item:', 'text_domain' ),
		'all_items'           		=> __( 'All Press', 'text_domain' ),
		'view_item'           	=> __( 'View Item', 'text_domain' ),
		'add_new_item'        	=> __( 'Add New Press', 'text_domain' ),
		'add_new'             	=> __( 'Add New', 'text_domain' ),
		'edit_item'           		=> __( 'Edit Item', 'text_domain' ),
		'update_item'         	=> __( 'Update Item', 'text_domain' ),
		'search_items'        	=> __( 'Search Item', 'text_domain' ),
		'not_found'           	=> __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  	=> __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               		=> __( 'post_type', 'text_domain' ),
		'description'         		=> __( 'Press clips about Almanac restaurant ', 'text_domain' ),
		'labels'              		=> $labels,
		'supports'            		=> array( 'title', 'custom-fields' ),
		'taxonomies'          	=> array( 'category', 'post_tag' ),
		'hierarchical'        		=> false,
		'public'              		=> true,
		'show_ui'             		=> true,
		'show_in_menu'        	=> true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       	=> 10,
		'can_export'          	=> true,
		'has_archive'         	=> true,
		'exclude_from_search' 	=> true,
		'publicly_queryable'  	=> true,
		'capability_type'     	=> 'page',
	);
	register_post_type( 'almanac_press', $args );
}

// Hook into the 'init' action
add_action( 'init', 'almanac_press', 0 );


function people_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Roles', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Role', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'By Role', 'text_domain' ),
		'all_items'                  => __( 'All Roles', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Role', 'text_domain' ),
		'edit_item'                  => __( 'Edit', 'text_domain' ),
		'update_item'                => __( 'Update', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'search_items'               => __( 'Search Roles', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used roles', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'role',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => false,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'staff_role', array( 'almanac_employees' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'people_taxonomy', 0 );

function dish_taxonomy() {

	$labels = array(
		'name'                       	=> _x( 'Dish Types', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              	=> _x( 'Dish Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  	=> __( 'By Type', 'text_domain' ),
		'all_items'                  	=> __( 'All Types', 'text_domain' ),
		'parent_item'                	=> __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'         	=> __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              	=> __( 'New Item Name', 'text_domain' ),
		'add_new_item'               	=> __( 'Add New Type', 'text_domain' ),
		'edit_item'                  	=> __( 'Edit Item', 'text_domain' ),
		'update_item'                	=> __( 'Update Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'search_items'               	=> __( 'Search Items', 'text_domain' ),
		'add_or_remove_items'        	=> __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
		'not_found'                  	=> __( 'Not Found', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       		=> 'course',
		'with_front'                 	=> true,
		'hierarchical'               		=> false,
	);
	$args = array(
		'labels'                     		=> $labels,
		'hierarchical'               		=> true,
		'public'                     		=> true,
		'show_ui'                    	=> true,
		'show_admin_column'          	=> true,
		'show_in_nav_menus'         	=> true,
		'rewrite'                   	 	=> $rewrite,
	);
	register_taxonomy( 'dish_type', array( 'almanac_dish' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'dish_taxonomy', 0 );


// Register Custom Post Type
function almanac_menu() {

	$labels = array(
		'name'                => _x( 'Dishes', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Dish', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Dishes', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Dishes', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Dish', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'almanac_dish', 'text_domain' ),
		'description'         => __( 'Food item Post Type', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title','editor','custom-fields', ),
		'taxonomies'          => array( 'category', 'dish_type' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'almanac_dish', $args );

}

// Hook into the 'init' action
add_action( 'init', 'almanac_menu', 0 );

// Register Custom Post Type
function almanac_employees() {
 
	$labels = array(
		'name'                		=> _x( 'Team Members', 'Post Type General Name', 'text_domain' ),
		'singular_name'       	=> _x( 'Team Member', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'          	=> __( 'Team Members', 'text_domain' ),
		'parent_item_colon'   	=> __( 'Parent Item:', 'text_domain' ),
		'all_items'           		=> __( 'All Profiles', 'text_domain' ),
		'view_item'           	=> __( 'View Profile', 'text_domain' ),
		'add_new_item'        	=> __( 'Add Team Member', 'text_domain' ),
		'add_new'             	=> __( 'Add New ', 'text_domain' ),
		'edit_item'           		=> __( 'Edit Item', 'text_domain' ),
		'update_item'         	=> __( 'Update Item', 'text_domain' ),
		'search_items'        	=> __( 'Search Item', 'text_domain' ),
		'not_found'           	=> __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  	=> __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               		=> __( 'post_type', 'text_domain' ),
		'description'         		=> __( 'Team Members at Almanac', 'text_domain' ),
		'labels'              		=> $labels,
		'supports'            		=> array( 'title', 'custom-fields', ),
		'taxonomies'          	=> array( 'staff_role' ),
		'hierarchical'        		=> false,
		'public'              		=> true,
		'show_ui'             		=> true,
		'show_in_menu'        	=> true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   	=> true,
		'menu_position'       	=> 5,
		'can_export'          	=> true,
		'has_archive'         	=> true,
		'exclude_from_search' 	=> true,
		'publicly_queryable'  	=> true,
		'capability_type'     	=> 'page',
	);
	register_post_type( 'almanac_employees', $args );
}
 
// Hook into the 'init' action
add_action( 'init', 'almanac_employees', 0 );



?>