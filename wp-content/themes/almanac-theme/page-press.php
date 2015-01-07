<?php
/*
 * Template Name: Press Page
 * Description: Press Page Template Layout
 */

// Code to display Page goes here...
?>
<?php get_header(); ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="page-<?php the_ID(); ?>">
			<section>
				<div class="row">
					<div class="small-12 medium-12 large-12">
						<header>
							<h1><?php the_title();?></h1>
							<hr>
						</header>
					</div>
				</div>
			</section>
			<section class="press">
				<div class="row">
					<div class="press-item small-12 medium-4 large-4 columns">
						<a href="#">
							<img class="press-img" src="http://placehold.it/350x150">
							<q>Best Restuarant in NYC</q>
						</a>
						<cite>New York Times</cite>
					</div>
					<div class="press-item small-12 medium-4 large-4 columns">
						<a href="#">
							<img class="press-img" src="http://placehold.it/350x150">
							<q>Best Restuarant in NYC</q>
						</a>
						<cite>New York Times</cite>
						

					</div>
					<div class="press-item small-12 medium-4 large-4 columns">
						<a href="#">
							<img class="press-img" src="http://placehold.it/350x150">
							<q>Best Restuarant in NYC</q>
						</a>
						<cite>New York Times</cite>
						

					</div>
				</div>
			</section>

			
		</article>
	<?php endwhile;?>

	
<?php get_footer();?>
