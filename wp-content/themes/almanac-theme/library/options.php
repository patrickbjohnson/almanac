<?php 

	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
				'page_title' 	=> 'Restaurant Options',
				'menu_title'	=> 'Restaurant Options',
				'menu_slug' 	=> 'theme-general-settings',
				'capability'		=> 'edit_posts',
				'redirect'		=> false
			));
			
			acf_add_options_sub_page(array(
				'page_title' 	=> 'Almanac Address',
				'menu_title'	=> 'Almanac Address',
				'parent_slug'	=> 'theme-general-settings'
				// 'capability'		=>	 'manage_options'
			));
			
			acf_add_options_sub_page(array(
				'page_title' 	=> 'Mas Farmhouse Address',
				'menu_title'	=> 'Mas Farmhouse Address',
				'parent_slug'	=> 'theme-general-settings'
				// 'capability'		=>	 'manage_options'
			));
	};

?>