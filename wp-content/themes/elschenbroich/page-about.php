<?php
/*
Template Name: About
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
				<?php echo get_field('main'); ?>
				<!--
					<div class="main-section-full">
						<?php echo get_field('main'); ?>
					</div>
					<div class="main-section-more">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/arrow-down.png" /> <?php if (function_exists('pll_current_language')) { if (pll_current_language() == "de"): echo "mehr"; else: echo "more"; endif; } ?>
					</div>
					<div class="main-section-less" style="display: none;">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/arrow-up.png" /> <?php if (function_exists('pll_current_language')) { if (pll_current_language() == "de"): echo "weniger"; else: echo "less"; endif; } ?>
					</div>
				!-->
			</div>
		</div><div class="category-about-sidebar-wrapper">
			<?php if( have_rows('sidebar') ):
				while ( have_rows('sidebar') ) : the_row(); ?>

				<div class="category category-sidebar">
					<span><?php echo the_sub_field('title'); ?></span>
					<?php if(get_sub_field('moreless') == 1): ?>
						<div class="main-section-full">
							<?php echo the_sub_field('content'); ?>
						</div>
						<div class="main-section-more">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/arrow-down.png" /> <?php if (function_exists('pll_current_language')) { if (pll_current_language() == "de"): echo "mehr"; else: echo "more"; endif; } ?>
						</div>
						<div class="main-section-less" style="display: none;">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/arrow-up.png" /> <?php if (function_exists('pll_current_language')) { if (pll_current_language() == "de"): echo "weniger"; else: echo "less"; endif; } ?>
						</div>
					<?php else: ?>
						<?php echo the_sub_field('content'); ?>
					<?php endif; ?>
				</div>

				<?php endwhile;
			endif; ?>
		</div>

		<div class="category">
			<span><?php if (function_exists('pll_current_language')) { if (pll_current_language() == "de"): echo 'Bilder'; else: echo 'Images'; endif; } ?></span>
			<div class="category-images-wrapper">
				<?php
				$images = get_field('images');
				if( $images ): ?>
					<?php foreach( $images as $image ): ?><div class="about-image-wrapper">
						<div class="about-image">
							<a href="<?php echo $image['sizes']['large']; ?>" class="fancybox" rel="images">
								<img src="<?php echo $image['sizes']['medium']; ?>" />
							</a>
							<p><?php echo $image['caption']; ?></p>
							<a href="<?php echo $image['url']; ?>" target="_blank">Download</a>
						</div>
					</div><?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>

	<?php endwhile; endif; ?>

	<?php get_footer(); ?>