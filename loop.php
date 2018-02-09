<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post content -->
		<div class="post-content"><?php the_content(); ?></div>
		<!-- /post content -->

		<!-- post excerpt -->
		<!-- <div class="post-excerpt"> <?php # html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?></div> -->
		<!-- /post excerpt -->

		<!-- post details -->
		<div class="post-details">
			<a class="permalink" href="<?php the_permalink(); ?>">
				<i class="fa fa-link"></i>
				<span class="date"><?php the_time('F j, Y'); ?> &ndash; <?php the_time('g:i a'); ?></span>
			</a>
		</div>
		<!-- /post details -->

		<?php # edit_post_link(); ?>

	</article>

	<div class="separator">
		<i class="fa fa-diamond"></i>
	</div>

	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
