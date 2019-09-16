<?php get_header(); ?>
<div class="hero">
	<div id="leonard-elschenbroich-img" class="image-wrapper" style="background-image: url('<?php
		$home = get_page_by_title('Home');
		$image = get_field('leonard-elschenbroich', $home->ID);
		echo $image[url];
	?>')"></div>
	<div id="listen-watch-img" class="image-wrapper" style="display: none; background-image: url('<?php
		$home = get_page_by_title('Home');
		$image = get_field('listen-watch', $home->ID);
		echo $image[url];
	?>')"></div>
	<div id="bolivia-img" class="image-wrapper" style="display: none; background-image: url('<?php
		$home = get_page_by_title('Home');
		$image = get_field('bolivia', $home->ID);
		echo $image[url];
	?>')"></div>
	<div id="new-music-img" class="image-wrapper" style="display: none; background-image: url('<?php
		$home = get_page_by_title('Home');
		$image = get_field('new-music', $home->ID);
		echo $image[url];
	?>')"></div>
	<div class="left"></div>
	<div class="right"></div>
	<div class="controls">
		<div class="controls-wrapper">
			<span id="leonard-elschenbroich-title">
				<a href="<?php if (function_exists('pll_get_post')) { echo get_page_link(pll_get_post(get_page_by_title('about')->ID)); } ?>">Leonard Elschenbroich</a>
			</span>
			<span id="listen-watch-title" style="display: none;">
				<a href="<?php if (function_exists('pll_get_term')) { echo get_category_link(pll_get_term(get_cat_ID('listen'))); } ?>"><?php if (function_exists('pll_current_language')) { if (pll_current_language() == "de"): echo "Hören&thinsp;&&thinsp;Sehen"; else: echo "Listen&thinsp;&&thinsp;Watch"; endif; } ?></a>
			</span>
			<span id="bolivia-title" style="display: none;">
				<a href="<?php if (function_exists('pll_get_post')) { echo get_page_link(pll_get_post(get_page_by_title('bolivia')->ID)); } ?>"><?php if (function_exists('pll_current_language')) { if (pll_current_language() == "de"): echo "Bolivien"; else: echo "Bolivia"; endif; } ?></a>
			</span>
			<span id="new-music-title" style="display: none;">
				<a href="<?php if (function_exists('pll_get_term')) { echo get_category_link(pll_get_term(get_cat_ID('new music'))); } ?>"><?php if (function_exists('pll_current_language')) { if (pll_current_language() == "de"): echo "Neue Musik"; else: echo "New Music"; endif; } ?></a>
			</span>
			<div class="pills">
				<div class="pill active" id="leonard-elschenbroich-pill" data-id="leonard-elschenbroich" data-index="0"></div>
				<div class="pill" id="listen-watch-pill" data-id="listen-watch" data-index="1"></div>
				<div class="pill" id="bolivia-pill" data-id="bolivia" data-index="2"></div>
				<div class="pill" id="new-music-pill" data-id="new-music" data-index="3"></div>
			</div>
		</div>
	</div>
</div>
<div class="main main-hero">
	<div class="category-hero-wrapper category-hero-wrapper-first">
		<div class="category category-hero">
			<span>News</span>
			<?php if (function_exists('pll_current_language')) { if (pll_current_language() == "de"): echo get_field('news_de', $home->ID); else: echo get_field('news_en', $home->ID); endif; } ?>
		</div>
	</div><!-- <div class="category-hero-wrapper">
		<div class="category category-hero">
			<span>Video</span>
			<?php if (function_exists('pll_current_language')) { if (pll_current_language() == "de"): echo get_field('video_de', $home->ID); else: echo get_field('video_en', $home->ID); endif; } ?>
		</div>
	</div> !--><div class="category-hero-wrapper category-hero-wrapper-last">
		<div class="category category-hero">
			<span><?php if (function_exists('pll_current_language')) { if (pll_current_language() == "de"): echo "Aktuelle CD"; else: echo "Latest CD"; endif; } ?></span>
			<?php if (function_exists('pll_current_language')) { if (pll_current_language() == "de"): echo get_field('current_cd_de', $home->ID); else: echo get_field('current_cd_en', $home->ID); endif; } ?>
		</div>
	</div>
<?php get_footer(); ?>