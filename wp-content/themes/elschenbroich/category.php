<?php get_header(); ?>
<div class="main">
	<div class="category">
		<span>
			<?php
				$category = get_category( get_query_var( 'cat' ) );
				$cat_id = $category->cat_ID;
				echo get_cat_name( $cat_id );
			?>
		</span>
	</div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_title(); ?>
		<?php the_content(); ?>
	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

	<?php get_footer(); ?>