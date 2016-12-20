<?php
	function theme_styles() {
		wp_enqueue_style('koogler_css', get_template_directory_uri() . '/assets/css/style.css' );
	}
	add_action('wp_enqueue_scripts', 'theme_styles');
?>
