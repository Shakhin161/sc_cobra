<?php

/* Theme Styles
---------------------------------------------------------------------------------------------------- */

function theme_styles() {

	wp_enqueue_style(
		'bootstrap.min',
		get_template_directory_uri() . '/css/bootstrap.min.css',
		array(),
		'1578'
	);

	wp_enqueue_style(
		'style',
		get_template_directory_uri() . '/style.css',
		array(),
		'1578'
	);

	wp_enqueue_style(
		'animate.min',
		get_template_directory_uri() . '/css/animate.min.css',
		array(),
		'1578'
	);

}
add_action('wp_enqueue_scripts', 'theme_styles');
