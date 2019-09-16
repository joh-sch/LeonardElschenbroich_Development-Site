<?php
/*
Template Name: Contact/Impressum
*/
?>

<?php get_header(); ?>
<div class="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="category">
			<span><?php the_title(); ?></span>
		</div>

		<?php if( have_rows('section') ):
			while ( have_rows('section') ) : the_row(); ?>

			<div class="main-section contact">
				<div class="main-section-type">
					<?php echo the_sub_field('section_title'); ?>
				</div><div class="main-section-content">
					<?php echo the_sub_field('section_content'); ?>
				</div>
			</div>

			<?php endwhile;
		endif;

	endwhile; endif; ?>

	<?php get_footer(); ?>