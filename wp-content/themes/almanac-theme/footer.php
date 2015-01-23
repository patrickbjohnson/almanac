
</div>
<footer class="footer full center">
	<div class="logo">
		<img class="wordmark" src="<?php bloginfo('template_directory'); ?>/img/almanac-wordmark.svg" alt="">	
	</div>
	<hr class="hr-large hr-dark">
	
	<div class="row">
		<div class="small-12 medium-centered medium-6 large-centered large-6 columns">
			<ul class="ss-social">
				<li><a href="http://www.twitter.com/<?php the_field('twitter', 'option'); ?>"><span class="icon-facebook"></span></a></li>
				<li><a href="http://www.instagram.com/<?php the_field('instagram', 'option'); ?>"><span class="icon-instagram"></span></a></li>
				<li><a href="http://www.facebook.com/<?php the_field('facebook', 'option'); ?>"><span class="icon-twitter"></span></a></li>
			</ul>
			<div itemscope itemtype="http://schema.org/Restaurant">
			  <span itemprop="name"><?php bloginfo( 'name' )?> </span>
			  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			    <span itemprop="streetAddress">28 Seventh Avenue South</span>
			    <span itemprop="addressLocality">New York</span>,
			    <span itemprop="addressRegion">NY</span> <span itemprop="postalCode">10014</span>
			  </div>
			  <div>
			  	<a itemprop="url" href="http://www.almanacnyc.com">almanacnyc.com</a>
			  </div>
			  <div>
			  	T: <span class="contact" itemprop="telephone">212-255-1795</span>
			  	F: <span class="contact" itemprop="faxNumber">212-255-1795</span>
			  	
			  </div>
			 
			  
			  
			</div>
		</div>
	</div>

	<?php dynamic_sidebar("footer-widgets"); ?>

</footer>

<?php wp_footer(); ?>

</body>
</html>
