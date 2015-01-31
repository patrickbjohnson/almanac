<?php get_header(); ?>

	<?php while (have_posts()) : the_post(); ?>
		<section class="full color page-intro center" id="page-<?php the_ID(); ?>">
			<div class="row center">
				<div class="small-12 medium-10 medium-centered large-10 large-centered columns">
					<header class="section-header">
						<h1><?php the_title();?></h1>
						<hr class="page-divide hr-small hr-light">
					</header>
				</div>
			</div>
		</section>
		<section>
			<div class="row">
				<div class="small-12 medium-10 medium-centered large-10 large-centered columns">
					<?php the_content(); ?>
				</div>
			</div>
		</section>
	<?php endwhile;?>

<?php get_footer(); ?>
