<?php
	function register_menu() {
		register_nav_menu('main-menu',__( 'Main Menu' ));
		if (!is_admin()) {
			wp_enqueue_script('jquery');
			wp_enqueue_script('imagesLoaded', get_stylesheet_directory_uri() . '/vendors/imagesLoaded.min.js', array( 'jquery' ) );
			wp_enqueue_script('packery', get_stylesheet_directory_uri() . '/vendors/packery.min.js', array( 'jquery' ) );
			wp_enqueue_script('fancybox', get_stylesheet_directory_uri() . '/vendors/jquery.fancybox.pack.js', array( 'jquery' ) );
			wp_enqueue_script('helpers', get_stylesheet_directory_uri() . '/vendors/helpers/jquery.fancybox-media.js', array( 'jquery' ) );
			wp_enqueue_script('app', get_stylesheet_directory_uri() . '/js/app.js', array( 'jquery' ) );
		}
	}

	add_action( 'init', 'register_menu' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	add_filter('show_admin_bar', '__return_false');
?>