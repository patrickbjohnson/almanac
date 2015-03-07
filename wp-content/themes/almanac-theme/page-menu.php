<?php
/*
 * Template Name: Menu
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
		</div>
	</div>
</section>

<section class="menu-list center">
	<?php menu_builder(); ?>	
</section>
 
<section class="menu-footer center">
	<?php while (have_posts()) : the_post(); ?>
		<div class="menu-notice alert">
			<?php esc_attr(the_field('menu_notice_message'));?>	
		</div>
	<?php endwhile ;?>
</section>
 
<?php get_footer();?>