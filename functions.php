<?php
	function theme_styles() {
		wp_enqueue_style('koogler_css', get_template_directory_uri() . '/assets/css/style.css' );
	}
	add_action('wp_enqueue_scripts', 'theme_styles');

	function theme_js() {
		global $wp_scripts;

		wp_register_script('skrollr', get_template_directory_uri() . '/assets/js/skrollr.min.js','','',true);
		wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js','','',true);
	}
	add_action('wp_enqueue_scripts', 'theme_js');


	add_theme_support('menus');

	function register_theme_menus() {
		register_nav_menus(
				array(
					'primary-menu' => __('Primary Menu'),
					'sub-menu' => __('Sub Menu')
				)
			);
	}
	add_action('init', 'register_theme_menus');

 ?>
