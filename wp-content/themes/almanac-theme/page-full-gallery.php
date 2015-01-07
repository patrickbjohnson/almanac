<?php
/*
 * Template Name: Full Page Image Gallery Page
 * Description: Full Page Image Gallery Page Template Layout
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
							<?php the_content(); ?>

						</header>
					</div>
				</div>
			</section>
			<section class="full gallery">
				<h1>image gallery</h1>
			</section>

			
		</article>
	<?php endwhile;?>

	
<?php get_footer();?>
