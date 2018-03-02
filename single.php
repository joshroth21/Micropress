<?php get_header(); ?>

	<main class="container" role="main">
	<!-- section -->
	<section class="single">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post formats -->
		<?php
			if ( has_post_format( 'aside' )) {
				echo "<h4>aside</h4>";
			} else if (has_post_format('gallery')) {
			   echo "<h4>gallery</h4>";
			} else if (has_post_format('link')) {
			   echo "<h4>link</h4>";
			}
		?>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->

			<!-- post content -->
			<div class="post-content"><?php the_content(); // Dynamic Content ?></div>
			<!-- /post content -->

			<!-- post details -->
			<div class="post-details">
				<a class="permalink" href="<?php the_permalink(); ?>">
					<i class="fa fa-link"></i>
					<span class="date"><?php the_time('F j, Y'); ?> &ndash; <?php the_time('g:i a'); ?></span>
				</a>
			</div>
			<!-- /post details -->

			<?php # edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php # comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php # get_sidebar(); ?>

<?php get_footer(); ?>
