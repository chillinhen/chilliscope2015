<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="js-masonry" data-masonry-options='{ "columnWidth": 300, "itemSelector": ".item" }'>

			<h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>

			<?php get_template_part('loop','grid'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
