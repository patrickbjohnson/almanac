<?php
/*
 * Template Name: Private Events
 * Description: Private Events Page Template Layout
 */

// Code to display Page goes here...
?>
<?php get_header(); ?>
		<section class="full color page-intro center">
			<div class="small-12 medium-10 medium-centered large-10 large-centered columns">
				<header class="section-header">
					<h1><?php the_title();?></h1>
					<hr class="page-divide hr-small hr-light">
				</header>
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile;?>
			</div>
		</section>		
		<section>
			<div class="row">
				<div class="small-12 medium-10 medium-centered large-10 large-centered columns">
					<?php the_field('page_slider');?>
				</div>
			</div>
		</section>

<?php get_footer();?>
