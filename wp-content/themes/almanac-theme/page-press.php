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
	
	<section class="press-section">
		<?php 
		$args = array( 'post_type' => 'almanac_press');
		$loop = new WP_Query( $args );
		if ($loop->have_posts()) : ?>
			<div class="row press">
				<? while ($loop->have_posts()) : $loop->the_post(); ?>
					<?php 
					$img = get_field('press_image');
					$link = get_field('press_link');
					?>
					<div class="small-12 medium-4 large-4 columns press-item">
						<?php if (!empty($img) && !empty($link)) :?>
							<a href="<?php esc_attr(the_field('press_link'));?>" target="_blank">
								<img class="press-image" src="<?php echo $img['sizes']['medium']; ?>" alt="">
							</a>
							
						<?php elseif (!empty($img)) :?>
							<img class="press-image" src="<?php echo $img['sizes']['medium']; ?>" alt="">
						<?php endif; ?>

						<q cite="<?php the_field('press_link');?>"><?php esc_attr(the_field('press_quote'));?></q>
						<cite>
							<?php if ($link) : ?>
							<a href="<?php the_field('press_link');?>" target="_blank">- <?php the_title();?></a>
							<?php else :?>
								- <?php the_title();?>
							<?php endif; ?>
						</cite>	
					</div>
					
					
				<?php endwhile ;?>
			</div>
			
		<?php else : ?>
			<div class="row center">
				<p>No press to report at this time.</p>	
			</div>
			
		<?php endif ;?>
	</section>
	
	
	
	
<?php get_footer();?>
