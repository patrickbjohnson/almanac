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
		} ?></title>
		<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/af9552f8-a3c6-4c2d-947d-7493cbf67e38.css"/>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/foundation.css" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-precomposed.png">
		<script src="<?php echo get_stylesheet_directory_uri() ; ?>/js/vendor/jquery.js"></script>
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	
	<div class="fixed">
		<div class="main-nav" role="navigation">
			<div class="row">
				<div class="site-nav">

					<?php wp_nav_menu( 
						array(  
							'theme_location' => 'left',
							'container'       => 'div',
							'container_class' => 'nav-list nav-left',
						)
					); ?>
					<a class="large logo" href="<?php bloginfo('url');?>">
						<img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt="">
					</a>
					<?php wp_nav_menu( 
						array(  
							'theme_location' => 'right',
							'container'       => 'div',
							'container_class' => 'nav-list nav-right',
						)
					); ?>
					<ul>
						<li><a href="<?php bloginfo('url');?>" class="small-link">Home</a></li>
					</ul>
				</div>
				<a class="logo small mobile-logo" href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a>
			</div>
		</div>
	</div>
	
	<div class="container"  id="page-<?php the_ID(); ?>">