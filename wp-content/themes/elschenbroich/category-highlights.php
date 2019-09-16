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

	<div class="highlights-wrapper">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="highlight-wrapper">
				<div class="highlight">
					<div class="highlight-title">
						<?php the_title(); ?>
					</div>
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; endif; ?>
	</div>

	<?php get_footer(); ?>