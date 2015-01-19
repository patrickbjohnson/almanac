<?php
/*
 * Template Name: Menu Page
 * Description: Almanac Menu Page Template Layout
 */
?>
<?php get_header(); ?>

<section class="full color center">
	<div class="row">
		<div class="small-12 medium-12 large-12 ">
			<header class="">
				<h1><?php the_title();?></h1>
			</header>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile ;?>
			<!-- Needs to be in a loop -->
		</div>
	</div>
</section>


<?php 
	$args = array( 'post_type' => 'almanac_dish');
	$loop = new WP_Query( $args );
	$custom = get_field('custom_menu_title');
?>

<section class="menu menu-three-course center">
	<div class="row">
		<header class="menu-header">
			<h1>Three Course Tasting Menu</h1>
			<span><?php the_field('three_course_menu_price', 'option'); ?></span>
		</header>
		
		<div class="small-12 medium-4 large-4 columns">

			<h2 class="menu-section--title">Appetizer</h2>

			<span class="menu-section--subtitle">choice of</span>
		
			<?php if ($loop->have_posts()) : 
				while ($loop->have_posts()) : 
					$loop->the_post();
					if( in_category('3-course') && has_term('appetizer', 'dish_type') ) : ?>
						<div class="menu-item">
							<h1 class="menu-item--title"><?php the_title();?></h1>
							<div class="menu-item--description">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endif;
				endwhile ;
			endif; ?>
		</div>

		<?php $loop->rewind_posts(); ?>

		<div class="menu-middle small-12 medium-4 large-4 columns">
			<h2 class="menu-section--title">Main</h2>
			<span class="menu-section--subtitle">choice of</span>

			<?php if ($loop->have_posts()) : 
				while ($loop->have_posts()) : 
					$loop->the_post();
					if( in_category('3-course') && has_term('main', 'dish_type') ) : ?>
						<div class="menu-item">
							<h1 class="menu-item--title"><?php the_title();?></h1>
							<div class="menu-item--description">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endif;
				endwhile ;
			endif; ?>
		</div>

		<?php $loop->rewind_posts(); ?>

		<div class="medium-4 columns">
			<h2 class="menu-section--title">Dessert</h2>
			<span class="menu-section--subtitle">choice of</span>
			<?php if ($loop->have_posts()) : 
				while ($loop->have_posts()) : 
					$loop->the_post();
					if( in_category('3-course') && has_term('dessert', 'dish_type') ) : ?>
						<div class="menu-item">
							<h1 class="menu-item--title"><?php the_title();?></h1>
							<div class="menu-item--description">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endif;
				endwhile ;
			endif; ?>
		</div>
	</div>
</section>
<hr>
<section class="menu menu-five-course center">
	<div class="row">
		<div class="small-12 medium-8 medium-centered large-8 large-centered columns">
			<header class="menu-header">
				<h1>Five Course Tasting Menu</h1>
				<span><?php the_field('five_course_menu_price', 'option'); ?></span>
			</header>
			
			<?php if ($loop->have_posts()) : 
				while ($loop->have_posts()) : 
					$loop->the_post();
					if (in_category('5-course') && has_term('appetizer', 'dish_type')) :?>
						<div class="menu-item">
							<h1 class="menu-item--title"><?php the_title();?></h1>
							<div class="menu-item--description">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endif ; ?>

					<?php if (in_category('5-course') && has_term('main', 'dish_type')) :?>
						<div class="menu-item">
							<h1 class="menu-item--title"><?php the_title();?></h1>
							<div class="menu-item--description">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endif ; ?>

					<?php if (in_category('5-course') && has_term('dessert', 'dish_type')) :?>
						<div class="menu-item">
							<h1 class="menu-item--title"><?php the_title();?></h1>
							<div class="menu-item--description">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endif ; ?>
					
				<?php endwhile ; 
			endif; ?>
		</div>
	</div>
	
</section>
<hr>
<section class="menu menu-eight-course center">
	<div class="row">
		<div class="small-12 medium-8 medium-centered large-8 large-centered columns">
			<header class="menu-header">
				<h1>Eight Course Tasting Menu</h1>
				<span><?php the_field('eight_course_menu_price', 'option'); ?></span>
			</header>
			
			<?php if ($loop->have_posts()) : 
				while ($loop->have_posts()) : 
					$loop->the_post();
					if (in_category('8-course') && has_term('appetizer', 'dish_type')) :?>
						<div class="menu-item">
							<h1 class="menu-item--title"><?php the_title();?></h1>
							<div class="menu-item--description">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endif ; ?>

					<?php if (in_category('8-course') && has_term('main', 'dish_type')) :?>
						<div class="menu-item">
							<h1 class="menu-item--title"><?php the_title();?></h1>
							<div class="menu-item--description">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endif ; ?>

					<?php if (in_category('8-course') && has_term('dessert', 'dish_type')) :?>
						<div class="menu-item">
							<h1 class="menu-item--title"><?php the_title();?></h1>
							<div class="menu-item--description">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endif ; ?>
					
				<?php endwhile ; 
			endif; ?>
		</div>
	</div>
</section>


<?php if($custom) : ?>
	<hr>
	<section class="menu menu-eight-course center">
		<div class="row">
			<div class="small-12 medium-8 medium-centered large-8 large-centered columns">
			<header class="menu-header">
				<h1><?php echo $custom; ?></h1>
				<span><?php the_field('custom_menu_price', 'option'); ?></span>
			</header>
		
		<?php if ($loop->have_posts()) : 
			while ($loop->have_posts()) : 
				$loop->the_post();
				if (in_category('custom-menu') && has_term('appetizer', 'dish_type')) :?>
					<div class="menu-item">
						<h1 class="menu-item--title"><?php the_title();?></h1>
						<div class="menu-item--description">
							<?php the_content(); ?>
						</div>
					</div>
				<?php endif ; ?>

				<?php if (in_category('custom-menu') && has_term('main', 'dish_type')) :?>
					<div class="menu-item">
						<h1 class="menu-item--title"><?php the_title();?></h1>
						<div class="menu-item--description">
							<?php the_content(); ?>
						</div>
					</div>
				<?php endif ; ?>

				<?php if (in_category('custom-menu') && has_term('dessert', 'dish_type')) :?>
					<div class="menu-item">
						<h1 class="menu-item--title"><?php the_title();?></h1>
						<div class="menu-item--description">
							<?php the_content(); ?>
						</div>
					</div>
				<?php endif ; ?>
				
			<?php endwhile ; 
		endif; ?>
			</div>
		</div>
		
	</section>

<?php endif; ?>


<section class="menu menu-footer menu-notice center">
	<p>We welcome any substitutions and happily allow all dishes to be enjoyed á la carte.</p>
</section>


	
	

	
<?php get_footer();?>
