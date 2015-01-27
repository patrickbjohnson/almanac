<?php
/*
 * Template Name: Conact
 * Description: Contact Page Template Layout
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
				</div>
			</div>
		</section>
		<section>
			<div class="row">
				<div class="small-12 medium-10 medium-centered large-10 large-centered columns">
					<?php the_field('contact_form');?>
				</div>
			</div>
		</section>


		<!-- <section <?php post_class() ?> id="page-<?php the_ID(); ?>">
			<div class="row">
				<header class="section-header">
					<h1><?php the_title();?></h1>
					<hr class="page-divide hr-small hr-dark">
				</header>
				<div class="small-12 medium-8 medium-centered large-8 large-centered columns">
					<?php the_content(); ?>
				</div>
			</div>
		</section> -->


<?php get_footer(); ?>
