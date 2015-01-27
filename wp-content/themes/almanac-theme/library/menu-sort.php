<?php 

// build menus based on sorting
function menu_builder( $post_type = 'almanac_dish' ){
	// args for the menu item cost post type
	$args = array(
		'post_type' => $post_type,
		'nopaging'	=> true
	);

	// initiate loop
	$loop = new WP_Query($args);

	// grab the menu display custom field
	$menus = get_field('display_menus');

	// if any menus are set
	if ( $menus ){
		// do our sorting
		$menus = sort_menu_terms( $menus );
		foreach ($menus as $slug => $data) {
			echo '<section class="food-menu ' . esc_attr( $slug ) . ' center">';
				echo '<div class="row">';
					echo '<header class="menu-header">';
					// check to see the data value is there
					// "isn't empty" check
					if ( !empty( $data['name'] ) ) {
						echo '<h1>' . esc_attr( $data['name'] ) . '</h1>';
					}
					if ( !empty( $data['price'] ) ) {
						echo '<span>' . esc_attr($data['price']) . '</span>';
					}
					echo '</header>';
				echo '</div>';
				
				// if we are in 3-course 
				if ($slug == '3-course'){
					// for each term that exists within 3-course (app/dessert/main)
					// this creates a 3 column layout. One column for each term
					foreach (sort_dish_terms('dish_type') as $key => $value) {
						 echo '<div class="small-12 medium-4 large-4 menu-column columns">';
						  	if ($loop->have_posts()) : 
						  		while ($loop->have_posts()) :  
						  			$loop->the_post();
									if (in_category($slug) && has_term($key, 'dish_type')) : 
									echo '<div class="food-menu-item">';
										echo '<h1 class="food-menu-item--title">' ;
											the_title();
										echo '</h1>';
										echo '<div class="food-menu-item--description">';
											the_content();
										echo '</div>';
									echo '</div>';
						  			endif;	
						  		endwhile;
						 	endif;
						 echo '</div>';		  	
					}
				} else {
					if ($slug == $slug) {
						foreach (sort_dish_terms('dish_type') as $key => $value) {
							echo '<div class="small-12 medium-8 medium-centered large-8 large-centered columns">';
							  	if ($loop->have_posts()) : 
							  		while ($loop->have_posts()) :  
							  			$loop->the_post();
					  					if (in_category($slug) && has_term($key, 'dish_type')) :
					  						echo '<div class="food-menu-item">';
												echo '<h1 class="food-menu-item--title">' ;
													the_title();
												echo '</h1>';
												echo '<div class="food-menu-item--description">';
													the_content();
												echo '</div>';
											echo '</div>';
					  					endif;
							  		endwhile;
							 	endif;
							 echo '</div>';
						}
					} 
				}
			echo '</section>';
		echo '<hr class="page-divide hr-large hr-dark">';
		}
	}
}


// sort menu terms
function sort_menu_terms( $terms = array() ){
	// bail if none are passed
	// if something is in there, keep going
	if ( empty( $terms ) || ! is_array( $terms ) ){
		return false;
	}
	// set an empty array to store data in
	$data = array();

	// loop through terms
	foreach ( $terms as $term_id ) {
		// get the term data
		$cat = get_term_by( 'id', $term_id, 'category');

		// bail if nothing came back for the term 
		if ( empty($cat) || false === $cat || is_wp_error ( $cat ) ){
			continue;
		}
		// menu name
		$name = $cat->name;
		// menu slug
		$slug = $cat->slug;
		// price
		$price = get_field( 'menu_price', $cat );
		$app = get_field( 'appetizer', $cat );
		echo $app;

		// now build array item for the menu price 
		// using the slug as the array key for sorting
		$data[$slug] = array(
			'name' 	=> $name,
			'price' 	=> $price,
			'slug'	=> $slug
			// other values can go here
		);
	} // end foreach

	// bail if no data exists
	if ( empty( $data ) ){return false;}
	// sort low to high by key (key is $slug)
	ksort( $data );

	// return the data
	return $data;
}


// sort dish terms 
function sort_dish_terms($term = array()){
	$taxonomy = get_terms( $term ) ;
	$data = array();
	foreach ($taxonomy as $tax => $key) {
		$slug = $key->slug;	
		$data[$slug] = array(
			'slug'  => $slug
		);	
	}
	return $data;
}

?>