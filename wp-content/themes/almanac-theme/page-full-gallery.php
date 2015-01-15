<?php
/*
 * Template Name: Full Page Image Gallery Page
 * Description: Full Page Image Gallery Page Template Layout
 */

// Code to display Page goes here...
?>
<?php get_header(); ?>
	<?php while (have_posts()) : the_post(); ?>
		<article  ?>
			<section>
				<div class="row">
					
					<div class="small-12 medium-12 large-12">
						<header>
							<h1><?php the_title();?></h1>
							<hr>
							

						</header>
						<?php the_content(); ?>
					</div>
				</div>
			</section>

			
	<?php endwhile;?>

	
<?php get_footer();?>
