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
		<div class="main-section press">
			<div class="main-section-type">
				<?php echo get_field('type'); ?>
			</div><div class="main-section-content">
				<h1><?php the_title(); ?></h1>
				<div class="main-section-full">
					<?php the_content(); ?>
				</div>
				<div class="main-section-more">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/arrow-down.png" /> more
				</div>
				<div class="main-section-less" style="display: none;">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/arrow-up.png" /> less
				</div>
			</div>
		</div>
	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

	<?php get_footer(); ?>