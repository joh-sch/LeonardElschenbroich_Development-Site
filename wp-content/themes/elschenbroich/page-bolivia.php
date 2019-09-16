<?php
/*
Template Name: Bolivia
*/
?>

<?php get_header(); ?>
<div class="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="category-about-content-wrapper">
			<div class="category category-content">
				<span>
					<?php the_title(); ?>
				</span>
				<?php the_content(); ?>
			</div>
		</div><div class="category-about-sidebar-wrapper">
			<?php if( have_rows('sidebar') ):
				while ( have_rows('sidebar') ) : the_row(); ?>

				<div class="category category-sidebar">
					<span><?php echo the_sub_field('title'); ?></span>
					<?php echo the_sub_field('content'); ?>
				</div>

				<?php endwhile;
			endif; ?>
		</div>

		<div class="category">
			<span>Videos</span>
			<div class="category-videos-wrapper">
				<?php if( have_rows('videos') ):
					while( have_rows('videos') ) : the_row(); ?><div class="bolivia-video-wrapper">
							<div class="bolivia-video watch">
								<?php echo get_sub_field('video_content'); ?>
							</div>
						</div><?php endwhile;
				endif; ?>
			</div>
		</div>

	<?php endwhile; endif; ?>

	<?php get_footer(); ?>