<?php
/*
 * Template Name: Menu Page
 * Description: Almanac Menu Page Template Layout
 */
?>
<?php get_header(); ?>

<section class="full color page-intro center">
	<div class="row">
		<div class="small-12 medium-10 medium-centered large-10 large-centered columns">
			<header class="section-header">
				<h1><?php the_title();?></h1>
				<hr class="page-divide hr-small hr-light">
			</header>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile ;?>
			<!-- Needs to be in a loop -->
		</div>
	</div>
</section>


<?php 
	$menus = get_field('display_menus');
	$args = array( 
		'post_type' => 'almanac_dish', 
		'posts_per_page' => -1
	);
	$loop = new WP_Query( $args );
	$field = get_field_object('display_menus');

	
?>


<?php if($menus) : ?>
	<?php foreach($menus as $menu) :
		$cat = get_term_by('id', $menu, 'category');
		$name = $cat->name;
		$slug = $cat->slug;
		$term = $cat->term;
		$price = get_field('menu_price', $cat);
	?> 
		<section class="food-menu menu-<?php echo $slug;?> center">
			<div class="row">
				<header class="menu-header">
					<h1><?php echo $name;?></h1>
					<span><?php echo $price; ?></span>
				</header>
				<?php if ($slug == '3-course') : ?>
					<p>in category three</p>

				<?php else : ?>
					
				<?php endif; ?>
				
			</div>
		</section>
		<hr class="page-divide hr-large hr-dark">

	<?php endforeach; ?>
<?php endif; ?>





				


<section class="food-menu menu-footer menu-notice center">
	<p class="alert">We welcome any substitutions and happily allow all dishes to be enjoyed á la carte.</p>
</section>


	
	

	
<?php get_footer();?>
