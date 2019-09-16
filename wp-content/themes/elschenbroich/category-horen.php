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

	<div class="listens-wrapper">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="listen-wrapper">
				<div class="listen">
					<div class="listen-title">
						<?php the_title(); ?>
					</div>
					<img src="<?php echo get_field('cover')[sizes][large]; ?>" />
					<p class="listen-caption">
						<?php echo get_field('cover')[title]; ?>
					</p>
					<?php if( have_rows('sections') ):
						while( have_rows('sections') ) : the_row(); ?>
							<div class="listen-track">
								<p class="listen-section"><?php echo get_sub_field('section_title'); ?></p>
								<?php if( have_rows('tracks') ):
									$index = 1;
									while( have_rows('tracks') ) : the_row(); ?>
										<p>
											<?php echo $index; $index++; ?>. <?php echo get_sub_field('track')[title]; ?>
											<audio controls preload="none">
												<source src="<?php echo get_sub_field('track')[url]; ?>" type="audio/mp4">
												Your browser does not support the audio element.
											</audio>
										</p>
									<?php endwhile;
								endif; ?>
							</div>
							<?php endwhile;
					endif; ?>
				</div>
			</div>
		<?php endwhile; endif; ?>
	</div>

	<?php get_footer(); ?>