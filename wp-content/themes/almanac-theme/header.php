<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(''); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title('');
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title><link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/7ac99170-d19e-4fa7-8d98-68308496f559.css"/>
		<link rel="stylesheet" href="http://i.icomoon.io/public/temp/81e27634bc/UntitledProject1/style.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/foundation.css" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-precomposed.png">
		<script src="<?php echo get_stylesheet_directory_uri() ; ?>/js/vendor/jquery.js"></script>
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	
	
	<div class="main-nav">
	 	<?php main_navigation_left(); ?>
		<a class="logo nav-toggle mobile-only" href="#">Almanac</a>
		<?php main_navigation_left(); ?>
		<a href="#" class="desktop-only"><h1>Almanac</h1></a>
	</div>
	<div class="container"  id="page-<?php the_ID(); ?>">
		
	
