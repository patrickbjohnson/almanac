<?php
/*
 * Template Name: Press Page
 * Description: Press Page Template Layout
 */

// Code to display Page goes here...
?>
<?php get_header(); ?>
	<section class="full color page-intro center">
		<div class="row center">
			<div class="small-12 medium-10 medium-centered large-10 large-centered columns">
				<header class="section-header">
					<h1><?php the_title();?></h1>
					<hr class="page-divide hr-small hr-light">
				</header>
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile;?>
			</div>
		</div>
	</section>
	
	<section>
		<?php 
		$args = array( 'post_type' => 'almanac_press');
		$loop = new WP_Query( $args );
		if ($loop->have_posts()) : ?>
			<div class="row press">
				<? while ($loop->have_posts()) : $loop->the_post(); ?>
					<?php 
					$img = get_field('press_image');?>
					<div class="small-12 medium-4 large-4 columns press-item">
						<a class="press-image" href="<?php the_field('press_link');?>">
							<img src="<?php echo $img['sizes']['medium']; ?>" alt="">
						</a>
						<q cite="<?php the_field('press_link');?>"><?php the_field('press_quote');?></q>
						<cite><a href="<?php the_field('press_link');?>">- <?php the_title();?></a></cite>	
					</div>
					
					
				<?php endwhile ;?>
			</div>
			
		<?php else : ?>
			<div class="row center">
				<p>No press to report at this time</p>	
			</div>
			
		<?php endif ;?>
	</section>
	
	
	
	
<?php get_footer();?>
