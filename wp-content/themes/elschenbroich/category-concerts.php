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

	<?php $today = date("Ymd"); ?>
	<?php
		$args = array(
			'cat' => 3,      
			'posts_per_page'	=> -1,
			'meta_key' => 'date',
			'orderby'			=> 'meta_value_num',
			'order' => 'DESC'
		);
		$loop = new WP_Query($args); 
	?>

	<?php while ($loop->have_posts()) : $loop->the_post(); ?>
		<?php $date = get_field('date', false, false); ?>
		<div class="main-section concerts<?php if ($date - $today > 0) echo ' future'; ?>">
			<div class="main-section-type">
				<?php
					$date = new DateTime($date);
					echo $date->format('F jS');
				?>, <?php echo get_field('hour'); ?>
				<br />
				<?php echo $date->format('Y'); ?>
			</div><div class="main-section-content">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<?php
					$link_url = get_field('link');
					if ($link_url != ""): ?>
						<a href="<?php echo get_field('link'); ?>">link</a>
					<?php endif
				?>
			</div>
		</div>
	<?php endwhile; ?>
		
<?php get_footer(); ?>