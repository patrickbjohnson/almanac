<?php get_header(); ?>

	<?php while (have_posts()) : the_post(); ?>
		<section <?php post_class() ?> id="page-<?php the_ID(); ?>">
			<div class="row">
				<header class="section-header">
					<h1><?php the_title();?></h1>
					<hr class="hr-small hr-dark">
				</header>
				<div class="small-12 medium-8 medium-centered large-8 large-centered columns">
					<?php the_content(); ?>
				</div>
			</div>
		</section>
	<?php endwhile;?>

<?php get_footer(); ?>
