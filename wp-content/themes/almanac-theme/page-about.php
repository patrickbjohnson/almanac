<?php
/*
 * Template Name: About Page
 * Description: Almanac About Page Template Layout
 */

// Code to display Page goes here...
?>
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
	<section class="full color about center">
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<header>
					<h1><?php the_title();?></h1>
					<p><?php the_content();?></p>
				</header>
			</div>
		</div>
	</section>
	

		
<?php endwhile;?>
<?php 
	$args = array( 'post_type' => 'almanac_employees');
	$loop = new WP_Query( $args );
?>
	
<section class="full team">
	<div class="row">
		<header class="small-12 medium-centered medium-8 large-centerd large-8 columns">
				<h1>Our Team</h1>
		</header>
		<?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>	
						<?php if( has_term('head-chef', 'staff_role')) :?>
							<div class="small-12 medium-centered medium-8 large-centerd large-8 columns">
								<?php 
									 $headshot = get_field('chef_picture');
								?>
								<img src="<?php echo $headshot['sizes']['large'];?>">
								<?php 
								// echo '<pre>';var_dump(get_field('chef_picture')); echo '</pre>';?>
									<h2 class="team-name"><?php the_title();?></h2>
									<span class="team-title"><?php the_field('job_title');?></span>
									
									<?php the_field('chef_bio');?>
									
							</div>
						<?php endif;?>
							

						<?php endwhile ;
					endif; wp_reset_query();?>
		
	</div class="row">
	<div class="row">
		<?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>	
			<?php if( has_term('chef-line-cook', 'staff_role')) :?>
				<div class="small-12 medium-6 large-6 center columns">
					<h2 class="team-name"><?php the_title();?></h2>
					<span class="team-title"><?php the_field('job_title');?></span>
				</div>
			<?php endif;?>
				
		<?php endwhile ;endif; ?>
	</div>	
	<div class="row">
		<?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>	
			<?php if( has_term('staff', 'staff_role')) :?>
				<div class="small-12 medium-4 large-4 center columns">
					<h2 class="team-name"><?php the_title();?></h2>
					<span class="team-title"><?php the_field('job_title');?></span>
				</div>
			<?php endif;?>
				
		<?php endwhile ;endif; ?>
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
			<?php 
			$location = get_field('almanac_google_map', 'option');
			$marker 	 = get_field('almanac_restaurant_marker', 'option');
			$locationString = $location['address'];
			$address = explode(',', $locationString);
			if( !empty($location) ):?>
			<div class="acf-map">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>" data-marker="<?php echo $marker;?>"></div>
			</div>
			<?php endif; ?>
			<img src="<?php the_field('almanac_restaurant_logo', 'option');?>" alt="" width="300">
			
			<div class=vcard>
				<abbr class="fn org" title="Almanac">Almanac</abbr>
				<p class=adr>
				<span class=street-address><?php echo $address[0];?></span>
				<span class=locality><?php echo $address[2];?></span>
				<abbr class=region title=Alberta><?php echo $address[3];?></abbr>
				<span class=postal-code><?php echo $address[4];?></span>
				<p><a href="mailto:<?php the_field('almanac_restaurant_email', 'option');?>"><?php the_field('almanac_restaurant_email', 'option');?></a></p>
				<p>P:<a class=tel href="tel:+2122551795"><?php the_field('almanac_restaurant_phone', 'option');?></a>
				<p>F:<a class=fax href="fax:+2122551720"><?php the_field('almanac_restaurant_fax', 'option');?></a>
			</div>
		</div>
		<div class="small-12 medium-6 large-6 columns">
			<?php 
			$location = get_field('mas_google_map', 'option');
			$marker 	 = get_field('mas_restaurant_marker', 'option');
			$locationString = $location['address'];
			$address = explode(',', $locationString);
			if( !empty($location) ):?>
			<div class="acf-map">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>" data-marker="<?php echo $marker;?>"></div>
			</div>
			<?php endif; ?>
			<img src="<?php the_field('mas_restaurant_logo', 'option');?>" alt="" width="300">
			
			<div class=vcard>
				<abbr class="fn org" title="Mas Farmhouse">Mas Farmhouse</abbr>
				<p class=adr>
				<span class=street-address><?php echo $address[1];?></span>
				<span class=locality><?php echo $address[2];?></span>
				<abbr class=region title=Alberta><?php echo $address[3];?></abbr>
				<span class=postal-code>10014</span>
				<p><a href="mailto:<?php the_field('mas_restaurant_email', 'option');?>"><?php the_field('mas_restaurant_email', 'option');?></a></p>
				<p>P:<a class=tel href="tel:+2122551795"><?php the_field('mas_restaurant_phone', 'option');?></a>
				<p>F:<a class=fax href="fax:+2122551720"><?php the_field('mas_restaurant_fax', 'option');?></a>
			</div>
		</div>
	</div>
	
</section>



	
	<?php do_action('foundationPress_after_content'); ?>

	
<?php get_footer(); echo 'page-home.php';?>
