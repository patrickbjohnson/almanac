<?php
/*
 * Template Name: Press Page
 * Description: Press Page Template Layout
 */

// Code to display Page goes here...
?>
<?php get_header(); ?>
	<div class="row center">
		<header class="section-header">
			<h1><?php the_title();?></h1>
			<hr class="hr-small hr-dark">
		</header>
			
	</div>
	
	<?php 
	$args = array( 'post_type' => 'almanac_press');
	$loop = new WP_Query( $args );
	if ($loop->have_posts()) : ?>
		<div class="row press">
			<? while ($loop->have_posts()) : $loop->the_post(); ?>
				<?php 
				$img = get_field('press_image');?>
				<div class="small-12 medium-4 large-4 columns press-item">
					<a href="<?php the_field('press_link');?>">
						<img src="<?php echo $img['sizes']['large']; ?>" alt="">
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
	<?php while (have_posts()) : the_post(); ?>
		<div class="row center">
			<header class="section-header">
				<h1>Press Inquieries</h1>
				<hr class="hr-small hr-dark">
			</header>
			<div class="small-12 medium-8 medium-centered large-8 large-centered columns">
				<?php the_content();?>
			</div>
		</div>
	<?php endwhile;?>
	
	
<?php get_footer();?>
