<?php
/*
 * Template Name: Home Page
 * Description: Almanac Home Page Template Layout
 */

// Code to display Page goes here...
?>
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

	<?php the_field('image_slider');?>

	<section class="full color center">
		<div class="arrow-down"></div>
		<div class="row">
			<div class="small-12 medium-centered medium-10  large-centered large-10 columns">
				<a class="button btn-reserve" href="<?php echo get_field('reservation_url');?>" target="_blank"><span class="icon-calendar"></span>Reserve Now</a>
				<?php 
				$location = get_field('almanac_google_map', 'option');
				$marker 	 = get_field('almanac_restaurant_marker', 'option');
				if( !empty($location) ):?>
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>" data-marker="<?php echo $marker;?>"></div>
				</div>
				<?php endif; ?>
			</div>
		</div class="row">
	</section>
	<section class="about center">
		<div class="row">
			<div class="small-12 medium-centered medium-10  large-centered large-10 columns">
				<h1><?php the_title();?></h1>
				<?php the_content();?>
			</div>
		</div>
	</section>
	
<?php endwhile;?>







	

	
<?php get_footer(); ?>
