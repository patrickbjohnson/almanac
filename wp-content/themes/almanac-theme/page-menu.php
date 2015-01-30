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

<section class="menu-list center">
	<?php menu_builder(); ?>	
</section>

<h1><?php ;?></h1>
 
<section class="menu-footer menu-notice center">
	<p class="alert"><?php the_field('menu_notice_message');?></p>
</section>
 
<?php get_footer();?>
 
<?php
