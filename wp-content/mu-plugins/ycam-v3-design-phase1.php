<?php

add_action('wp_enqueue_scripts', function () {
	if (!is_page(15)) {
		return;
	}

	$style_path = __DIR__ . '/ycam-v3-design-phase1.css';
	wp_enqueue_style(
		'ycam-v3-design-phase1',
		plugins_url('ycam-v3-design-phase1.css', __FILE__),
		[],
		file_exists($style_path) ? (string) filemtime($style_path) : null
	);
}, 99);
