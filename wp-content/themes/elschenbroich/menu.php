<div class="menu-wrapper hidden">
	<div class="border-wrapper">
		<div class="name">
			<a href="/">Leonard Elschenbroich</a>
			<div class="toggle">
				<span class="menu-expand">↓</span>
				<span class="menu-collapse">↑</span>
			</div>
		</div>
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	</div>
	<div class="lang">
		<?php $langs = pll_the_languages(array('raw'=>1)); ?>
		<?php $index = 0 ?>
		<?php foreach($langs as $lang) {
			echo '<a href="' . $lang[url] . '"';
			if ($lang[current_lang]) echo 'class="active" ';
			echo '>' . $lang[name] . '</a>';
			if ($index == 0) echo ' / ';
			$index++;
		}?>
	</div>
	<div class="social">
		<div class="social-icon social-twitter"></div>
		<div class="social-icon social-facebook"></div>
		<div class="social-icon social-itunes"></div>
	</div>
</div>