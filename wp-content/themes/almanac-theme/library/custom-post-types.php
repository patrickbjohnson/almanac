<?php 
// Register Custom Post Type
function almanac_menu() {

	$labels = array(
		'name'                => _x( 'Menus', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Menu', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Menu', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'Menu Items', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Menu Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'almanac_menu', 'text_domain' ),
		'description'         => __( 'Menu Post Type', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title','custom-fields', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
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
	register_post_type( 'almanac_menu', $args );

}

// Hook into the 'init' action
add_action( 'init', 'almanac_menu', 0 );


?>