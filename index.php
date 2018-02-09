<?php get_header(); ?>

	<main class="container" role="main">
		<!-- section -->
		<section class="loop">

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php # get_sidebar(); ?>

<?php get_footer(); ?>
