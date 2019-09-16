<?php get_header(); ?>
<div class="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="category">
			<span>
				<?php the_title(); ?>
			</span>
		</div>

		<?php the_content(); ?>
	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

	<?php get_footer(); ?>