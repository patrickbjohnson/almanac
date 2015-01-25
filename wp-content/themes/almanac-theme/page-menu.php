<?php
/*
 * Template Name: Menu Page
 * Description: Almanac Menu Page Template Layout
 */
?>
<?php get_header(); ?>

<section class="full color page-intro center">
	<div class="row">
		<div class="small-12 medium-12 large-12 ">
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


<?php 
	$args = array( 'post_type' => 'almanac_dish');
	$loop = new WP_Query( $args );
	$custom = get_field('custom_menu_title');
	$menus = get_field('display_menus');
?>


<section class="food-menu menu-three-course center">
	<div class="row">
		<header class="menu-header">
				<?php 
				$threeterm = get_term_by('slug', '3-course', 'category');
				$threename = $threeterm->name;
				$threeprice = get_field('menu_price', $threeterm);
				?>
			<h1><?php echo $threename;?></h1>
			<span><?php echo $threeprice; ?></span>
		</header>
		
		<div class="small-12 medium-4 large-4 columns">

			<h2 class="menu-section--title">Appetizer</h2>

			<span class="menu-section--subtitle">choice of</span>
		
			<?php if ($loop->have_posts()) : 
				while ($loop->have_posts()) : 
					$loop->the_post();
					if( in_category('3-course') && has_term('appetizer', 'dish_type') ) : ?>
						<div class="food-menu-item">
							<h1 class="food-menu-item--title"><?php the_title();?></h1>
							<div class="food-menu-item--description">
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
						<div class="food-menu-item">
							<h1 class="food-menu-item--title"><?php the_title();?></h1>
							<div class="food-menu-item--description">
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
						<div class="food-menu-item">
							<h1 class="food-menu-item--title"><?php the_title();?></h1>
							<div class="food-menu-item--description">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endif;
				endwhile ;
			endif; ?>
		</div>
	</div>
</section>
<hr class="page-divide hr-large hr-dark">
<section class="food-menu menu-five-course center">
	<div class="row">
		<div class="small-12 medium-8 medium-centered large-8 large-centered columns">
			<header class="menu-header">
				<?php 
				$fiveterm = get_term_by('slug', '5-course', 'category');
				$fivename = $fiveterm->name;
				$fiveprice = get_field('menu_price', $fiveterm);
				?>
			<h1><?php echo $fivename;?></h1>
			<span><?php echo $fiveprice; ?></span>
			</header>
			
			<?php if ($loop->have_posts()) : 
				while ($loop->have_posts()) : 
					$loop->the_post();
					if (in_category('5-course') && has_term('appetizer', 'dish_type')) :?>
						<div class="food-menu-item">
							<h1 class="food-menu-item--title"><?php the_title();?></h1>
							<div class="food-menu-item--description">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endif ; ?>

					<?php if (in_category('5-course') && has_term('main', 'dish_type')) :?>
						<div class="food-menu-item">
							<h1 class="food-menu-item--title"><?php the_title();?></h1>
							<div class="food-menu-item--description">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endif ; ?>

					<?php if (in_category('5-course') && has_term('dessert', 'dish_type')) :?>
						<div class="food-menu-item">
							<h1 class="food-menu-item--title"><?php the_title();?></h1>
							<div class="food-menu-item--description">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endif ; ?>
					
				<?php endwhile ; 
			endif; ?>
		</div>
	</div>
	
</section>
<hr class="page-divide hr-large hr-dark">
<section class="food-menu menu-eight-course center">
	<div class="row">
		<div class="small-12 medium-8 medium-centered large-8 large-centered columns">
			<header class="menu-header">
				<?php 
				$eightterm = get_term_by('slug', '5-course', 'category');
				$eightname = $eightterm->name;
				$eightprice = get_field('menu_price', $eightterm);
				?>
			<h1><?php echo $eightname;?></h1>
			<span><?php echo $eightprice; ?></span>
			
			<?php if ($loop->have_posts()) : 
				while ($loop->have_posts()) : 
					$loop->the_post();
					if (in_category('8-course') && has_term('appetizer', 'dish_type')) :?>
						<div class="food-menu-item">
							<h1 class="food-menu-item--title"><?php the_title();?></h1>
							<div class="food-menu-item--description">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endif ; ?>

					<?php if (in_category('8-course') && has_term('main', 'dish_type')) :?>
						<div class="food-menu-item">
							<h1 class="food-menu-item--title"><?php the_title();?></h1>
							<div class="food-menu-item--description">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endif ; ?>

					<?php if (in_category('8-course') && has_term('dessert', 'dish_type')) :?>
						<div class="food-menu-item">
							<h1 class="food-menu-item--title"><?php the_title();?></h1>
							<div class="food-menu-item--description">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endif ; ?>
					
				<?php endwhile ; 
			endif; ?>
		</div>
	</div>
</section>

<?php foreach($menus as $menu) : ?>
	<?php
		$cat = get_term_by('id', $menu, 'category');
		$name = $cat->name;
		$slug = $cat->slug;
		$customterm = get_term_by('slug', $slug, 'category');
		$customprice = get_field('menu_price', $customterm);
	 if ($slug != '3-course' && $slug != '5-course' && $slug != '8-course') :?>
		<hr class="page-divide hr-large hr-dark">
		<section class="food-menu menu-<?php echo $slug;?> center">
			<div class="row">
				<div class="small-12 medium-8 medium-centered large-8 large-centered columns">
					<header class="menu-header">
						<h1><?php echo $name; ?></h1>
						<span><?php echo $customprice; ?></span>
					</header>
					<?php if ($loop->have_posts()) : 
						while ($loop->have_posts()) : 
							$loop->the_post();

							if (in_category($slug) && has_term('appetizer', 'dish_type')) :
								?>
								<div class="food-menu-item">
									<h1 class="food-menu-item--title"><?php the_title();?></h1>
									<div class="food-menu-item--description">
										<?php the_content(); ?>
									</div>
								</div>
							<?php endif ; ?>

							<?php if (in_category($slug) && has_term('main', 'dish_type')) :?>
								<div class="food-menu-item">
									<h1 class="food-menu-item--title"><?php the_title();?></h1>
									<div class="food-menu-item--description">
										<?php the_content(); ?>
									</div>
								</div>
							<?php endif ; ?>

							<?php if (in_category($slug) && has_term('dessert', 'dish_type')) :?>
								<div class="food-menu-item">
									<h1 class="food-menu-item--title"><?php the_title();?></h1>
									<div class="food-menu-item--description">
										<?php the_content(); ?>
									</div>
								</div>
							<?php endif ; ?>
							
						<?php endwhile ; 
					endif; ?>
				</div>
			</div>
		</section>
<?php endif;?>
<?php endforeach; ?>
				


<section class="food-menu menu-footer menu-notice center">
	<p class="alert">We welcome any substitutions and happily allow all dishes to be enjoyed á la carte.</p>
</section>


	
	

	
<?php get_footer();?>
