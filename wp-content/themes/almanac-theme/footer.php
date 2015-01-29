
</div>
<footer class="footer full center">
	<div class="logo">
		<img class="wordmark" src="<?php bloginfo('template_directory'); ?>/img/almanac-wordmark.svg" alt="">	
	</div>
	<div class="page-divide hr-large hr-dark"></div>
	
	<div class="row">
		<div class="small-12 medium-centered medium-6 large-centered large-6 columns">
			<?
			$location = get_field('almanac_google_map', 'option');
			$marker 	 = get_field('almanac_restaurant_marker', 'option');
			$locationString = $location['address'];
			$address = explode(',', $locationString);
			?>
			<div itemscope itemtype="http://schema.org/Restaurant">
			   <!-- <span class="fn org"></span>  -->
			     <div class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> 
			        <span itemprop="streetAddress"><?php echo $address[0];?></span>
			        <span itemprop="addressLocality"><?php echo $address[1];?></span>, <span itemprop="addressRegion"><?php echo $address[2];?></span><a class="map" href="http://maps.google.com/?q=<?php echo $location['address'];?>" target="_blank">{Map}</a>
			     </div> 
			     <div class="contact">
			     	<a class="email" href="mailto:<?php the_field('almanac_restaurant_email', 'option');?>"><?php the_field('almanac_restaurant_email', 'option');?></a>
			     	P:<a class="tel" href="tel:+2122551795"><?php the_field('almanac_restaurant_phone', 'option');?></a>
					F:<a class="fax" href="fax:+2122551720"><?php the_field('almanac_restaurant_fax', 'option');?></a>				
			     </div>
			</div>

			<ul class="social-links">
				<li><a href="http://www.twitter.com/<?php the_field('twitter', 'option'); ?>"><span class="icon-facebook"></span></a></li>
				<li><a href="http://www.instagram.com/<?php the_field('instagram', 'option'); ?>"><span class="icon-instagram"></span></a></li>
				<li><a href="http://www.facebook.com/<?php the_field('facebook', 'option'); ?>"><span class="icon-twitter"></span></a></li>
			</ul>
		</div>
	</div>

	<?php dynamic_sidebar("footer-widgets"); ?>

</footer>

<?php wp_footer(); ?>

</body>
</html>