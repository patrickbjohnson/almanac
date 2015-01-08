<?php
/*
 * Template Name: Menu Page
 * Description: Almanac Menu Page Template Layout
 */

// Code to display Page goes here...
?>
<?php get_header(); ?>
<?php the_title();?>
<section class="full">
	<div class="row">
		<div class="small-12 medium-12 large-12">
			<header>
				<h1>The Menu</h1>
			</header>
			<p>Write some copy here describing that the menu is updated daily and this may actually be a good place to write some copy about where the food is sourced from.</p>
		</div>
	</div>
</section>



	<?php 

	$args = array( 'post_type' => 'almanac_menu', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );

	while ( $loop->have_posts() ) : $loop->the_post();
		$menu = get_field('dish_menu')[0];
		if ($menu == 'three course'){
			the_title();
			the_content();
		} else {
			echo 'no content';
		}
	endwhile;
	?>






<section class="menu three-course">
	<div class="row">
		<?php the_field('dish_description');?>
		<h1>Three Course Tasting Menu</h1>
		<h2>75</h2>
		<div class="small-12 medium-4 large-4 columns">
			<h2>Appetizer</h2>
			<span class="menu-subtitle">choice of</span>
		</div>
		<div class="small-12 medium-4 large-4 columns">
			<h2>Main</h2>
			<span class="menu-subtitle">choice of</span>
		</div>
		<div class="small-12 medium-4 large-4 columns">
			<h2>Dessert</h2>
			<span class="menu-subtitle">choice of</span>
		</div>
	</div>
</section>
<section class="menu five-course">
	<div class="row">
		<div class="small-12 medium-centered medium-8 large-centerd large-8 columns">
			<h1>Five Course Tasting Menu</h1>
			<h2>95</h2>
			<ul>
				<li>Item #</li>
				<li>Item #</li>
				<li>Item #</li>
				<li>Item #</li>
				<li>Item #</li>
				<li>Item #</li>
			</ul>
		</div>
	</div>
</section>
<section class="menu eight-course">
	<div class="row">
		<div class="small-12 medium-centered medium-8 large-centerd large-8 columns">
			<h1>Eight Course Tasting Menu</h1>
			<h2>145</h2>
			<ul>
				<li>Item #</li>
				<li>Item #</li>
				<li>Item #</li>
				<li>Item #</li>
				<li>Item #</li>
				<li>Item #</li>
			</ul>
		</div>
	</div>
</section>
<section class="menu menu-footer menu-notice">
	<p>We welcome any substitutions and happily allow all dishes to be enjoyed á la carte.</p>
</section>


<?php 


	while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="page-<?php the_ID(); ?>">
			

			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			
		</article>
	<?php endwhile;?>

	
	

	
<?php get_footer(); echo 'page-menu.php';?>
