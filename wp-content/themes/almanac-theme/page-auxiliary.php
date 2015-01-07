<?php
/*
 * Template Name: Auxiliary Page
 * Description: Almanac Auxiliary Page Template Layout
 */

// Code to display Page goes here...
?>
<?php get_header(); ?>
<h1>Auxiliary page template</h1>
<?php the_title();?>
<section class="full full-gallery bg-placeholder">
	<div class="row ">
		<div class="small-12 medium-12 large-12">
			<h1>Hero Gallery Slider</h1>
			<p>Hero image gallery goes here as a slider</p>	
			<p>Text overlays and is put in a different position as each slide displays</p>
		</div>
	</div>
</section>
<section class="full reserve">
	<div class="row">
		<div class="small-12 medium-12 large-12">
			<a class="button large"href="#">Reserve Now</a>
			<p>restuart address from ACF</p>
			<div id="map-canvas">
				google map with custom google drop
			</div>
		</div>
	</div class="row">
</section>
<section class="about">
	<div class="row">
		<div class="small-12 medium-12 large-12">
			<h1>About Us</h1>
			<small>dont forget the hr graphic</small>
			<hr>
			<p>ACF custom field on the home page template</p>
		</div>
	</div>
</section>


	<?php do_action('foundationPress_before_content'); ?>

	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="page-<?php the_ID(); ?>">
			

			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			
		</article>
	<?php endwhile;?>
	<?php do_action('foundationPress_after_content'); ?>

	
<?php get_footer(); echo 'page-Auxiliary.php';?>
