<?php
/*
 * Template Name: Private Events
 * Description: Private Events Page Template Layout
 */

// Code to display Page goes here...
?>
<?php get_header(); ?>
	<?php while (have_posts()) : the_post(); ?>
		<section>
			<header class="header center">
				<h1><?php the_title();?></h1>
			</header>
			<div class="row">
				<div class="small-12 medium-8 medium-centered large-8 large-centered columns">
					<?php the_content(); ?>	
				</div>
			</div>
		</section>
	<?php endwhile;?>

<?php get_footer();?>
