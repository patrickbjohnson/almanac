<?php
/*
 * Template Name: About Page
 * Description: Almanac About Page Template Layout
 */

// Code to display Page goes here...
?>
<?php get_header(); ?>
<?php the_title();?>
<section class="full about">
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<header>
				<h1>The Restuarant</h1>
			</header>
			<!-- <header>
				<h1>The Restuarant</h1>
			</header>
			<p>Donec sed odio dui. Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>

			<p>Nulla vitae elit libero, a pharetra augue. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p> -->
		</div>
	</div>
</section>
<section class="full team">
	<div class="row">
		<header class="small-12 medium-centered medium-8 large-centerd large-8 columns">
				<h1>Our Team</h1>
		</header>
		<div class="small-12 medium-centered medium-8 large-centerd large-8 columns">
			<img src="http://placehold.it/700x350">
				<h2 class="team-name">Chef Name</h2>
				<span class="team-title">Chef Title</span>
				<p class="team-bio">Vestibulum id ligula porta felis euismod semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum.</p>
		</div>
	</div class="row">
	<div class="row">
		<div class="small-12 medium-6 large-6 columns">
			<h2 class="team-name">Chef Name</h2>
			<span class="team-title">Chef Title</span>
		</div>
		<div class="small-12 medium-6 large-6 columns">
			<h2 class="team-name">Chef Name</h2>
			<span class="team-title">Chef Title</span>
		</div>
	</div>	
	<div class="row">
		<div class="small-12 medium-4 large-4 columns">
			<h2 class="team-name">Chef Name</h2>
			<span class="team-title">Chef Title</span>
		</div>
		<div class="small-12 medium-4 large-4 columns">
			<h2 class="team-name">Chef Name</h2>
			<span class="team-title">Chef Title</span>
		</div>
		<div class="small-12 medium-4 large-4 columns">
			<h2 class="team-name">Chef Name</h2>
			<span class="team-title">Chef Title</span>
		</div>
	</div>
</section>
<section class="full location">
	<div class="row">
		<header>
			<h1>Location</h1>
			<hr>
			<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui.</p>
		</header>
		<div class="small-12 medium-6 large-6 columns">
			<h2>google map div</h2>
			<h3>restaurant logo</h3>
			<div class=vcard>
				<abbr class="fn org" title="Almanac NYC">Almanac</abbr>
				<p class=adr>
				<span class=street-address>28 Seventh Avenue South</span>
				<span class=locality>New York</span>
				<abbr class=region title=Alberta>NY</abbr>
				<span class=country-name>United States</span>
				<span class=postal-code>10014</span>
				<p>P:<a class=tel href="tel:+2122551795">212-255-1795</a>
				<p>F:<a class=fax href="fax:+2122551720">212-255-1720</a>
			</div>
		</div>
		<div class="small-12 medium-6 large-6 columns">
			<h2>google map div</h2>
			<h3>restaurant logo</h3>
			<div class=vcard>
				<abbr class="fn org" title="Mas Farmhouse">Mas Farmhouse</abbr>
				<p class=adr>
				<span class=street-address>28 Seventh Avenue South</span>
				<span class=locality>New York</span>
				<abbr class=region title=Alberta>NY</abbr>
				<span class=country-name>United States</span>
				<span class=postal-code>10014</span>
				<p>P:<a class=tel href="tel:+2122551795">212-255-1795</a>
				<p>F:<a class=fax href="fax:+2122551720">212-255-1720</a>
			</div>
		</div>
	</div>
	
</section>



	<?php while (have_posts()) : the_post(); ?>
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
	<?php do_action('foundationPress_after_content'); ?>

	
<?php get_footer(); echo 'page-home.php';?>
