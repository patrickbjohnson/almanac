<?php
/*
 * Template Name: About Page
 * Description: Almanac About Page Template Layout
 */

// Code to display Page goes here...
?>
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
	<section class="full color page-intro about center">
		<div class="row">
			<div class="small-12 medium-10 medium-centered large-10 large-centered columns">
				<header class="section-header">
					<h1><?php the_title();?></h1>
					<hr class="page-divide hr-small hr-light">
				</header>
				<?php the_content();?>
			</div>
		</div>
	</section>
	

		
<?php endwhile;?>
<?php 
	$args = array( 'post_type' => 'almanac_employees');
	$loop = new WP_Query( $args );
?>
	
<section class="full team center">
	<div class="row">
		<header class="section-header">
			<h1>Our Team</h1>
			<hr class="page-divide hr-small hr-dark">
		</header>
	</div>
	<?php 
		$args = array('staff_role');
		$taxonomy = get_terms($args);
		$data = array();
		foreach ($taxonomy as $tax => $key) {
			$name = $key->name;
			$slug = $key->slug;
			$data[$tax] = array(
				'name' => $name,
				'slug'  => $slug
			);
		}
		if ($data) {
			foreach ($data as $key => $value) {
				$name = $value['name'];
				$slug  = $value['slug'];
				echo '<div class="row">';
					if ($slug == 'head-chef'){
						if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
							if( has_term($slug, 'staff_role')) :
								$headshot = get_field('chef_picture');
								echo '<div class="small-12 medium-centered medium-8 large-centerd large-8 columns employee head-chef">';
									echo '<img src="' . $headshot['sizes']['large'] . '">';
									echo '<h2 class="team-name">';
										esc_attr(the_title());
									echo '</h2>';
									echo '<span class="team-title">';
										esc_attr(the_field('job_title'));
									echo '</span>';
										esc_attr(the_field('chef_bio'));
								echo '</div>';
							endif;
					endwhile ; endif; wp_reset_query();
					} elseif ($slug == 'chef-line-cook') {
						if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
							if( has_term($slug, 'staff_role')) :
								echo '<div class="small-12 medium-6 large-6 columns employee chef">';
								echo '<h2 class="team-name">';
									esc_attr(the_title());
								echo '</h2>';
								echo '<span class="team-title">';
									esc_attr(the_field('job_title'));
								echo '</span>';
								echo '</div>';								
							endif;
						endwhile ; endif; wp_reset_query();

					} elseif ($slug == 'staff') {
						echo '<div class="menu-divide"></div>';
						if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); 	
						if( has_term($slug, 'staff_role')) :
							echo '<div class="small-12 medium-4 large-4 center columns employee staff">';
								echo '<h2 class="team-name">';
									the_title();
								echo '</h2>';
								echo '<span class="team-title">';
									esc_attr(the_field('job_title'));
								echo '</span>';
							echo '</div>';
						endif;
					endwhile ;endif; 
					} else {
						echo '<h1>Team Members will be updated shortly</h1>';
					}
				echo '</div>';
			}
		}
	?>
	<hr class="section-divide">	
</section>

<section class="full location center">

	<div class="row center">
		<header class="section-header">
			<h1>Location</h1>
			<hr class="page-divide hr-small hr-dark">
		</header>
		<p>Almanac and our sister restaurant, Mas Farmhouse, are both located in Manhattan’s West Village neighorhood.</p>
		<div class="small-12 medium-6 large-6 center columns">
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
			<img class="logo" src="<?php esc_attr(the_field('almanac_restaurant_logo', 'option'));?>" alt="" width="300">
			<div class="vcard">
			     <div class="adr"> 
			        <span class="street-address"><?php echo $address[0];?></span>
			        <span class="locality"><?php echo $address[1];?></span>, <span class="region"><?php echo $address[2];?></span><a class="map" href="http://maps.google.com/?q=<?php echo $location['address'];?>" target="_blank">{Map}</a>
			     </div> 
			     <div class="contact">
			     	<a class="email" href="mailto:<?php esc_attr(the_field('almanac_restaurant_email', 'option'));?>"><?php esc_attr(the_field('almanac_restaurant_email', 'option'));?></a>
			     	P:<a class="tel" href="tel:+2122551795"><?php esc_attr(the_field('almanac_restaurant_phone', 'option'));?></a>
					F:<a class="fax" href="fax:+2122551720"><?php esc_attr(the_field('almanac_restaurant_fax', 'option'));?></a>				
			     </div>
			   		<a class="url" href="<?php bloginfo('url');?>" ><?php esc_attr(bloginfo('name'));?></a> 
			</div>
		</div>
		<div class="small-12 medium-6 large-6 center columns">
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
			<img class="logo" src="<?php esc_attr(the_field('mas_restaurant_logo', 'option'));?>" alt="" width="300">
			
			<div class="vcard">
			     <div class="adr"> 
			        <span class="street-address"><?php echo $address[0];?></span>
			        <span class="locality"><?php echo $address[1];?></span>, <span class="region"><?php echo $address[2];?></span><a class="map" href="http://maps.google.com/?q=<?php echo $location['address'];?>" target="_blank">{Map}</a>
			     </div> 
			     <div class="contact">
			     	<a class="email" href="mailto:<?php esc_attr(the_field('mas_restaurant_email', 'option'));?>"><?php the_field('mas_restaurant_email', 'option');?></a>
			     	P:<a class="tel" href="tel:+2122551795"><?php esc_attr(the_field('mas_restaurant_phone', 'option'));?></a>
					F:<a class="fax" href="fax:+2122551720"><?php esc_attr(the_field('mas_restaurant_fax', 'option'));?></a>				
			     </div>
			   		<a class="url" href="<?php esc_attr(the_field('mas_restaurant_site', 'option'));?>" >Mas Farmhouse</a> 
			</div>
		</div>
	</div>
	
</section>

	
<?php get_footer();?>
