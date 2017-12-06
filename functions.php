<?php

// Подключение CSS, Fonts, JavaScript
function resume_enqueue_scripts() {
	$url = get_template_directory_uri();
	
	// Bootstrap core CSS
	wp_enqueue_style( 'bootstrap', $url . '/vendor/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', $url . '/vendor/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'devicons', $url . '/vendor/devicons/css/devicons.min.css' );
	wp_enqueue_style( 'simple-line-icons', $url . '/vendor/simple-line-icons/css/simple-line-icons.css' );
	
	// Custom styles for this template
	wp_enqueue_style( 'resume', $url . '/css/resume.min.css' );
	
	// Bootstrap core JavaScript
	wp_enqueue_script( 'bootstrap', $url . '/vendor/bootstrap/js/bootstrap.bundle.min.js', [ 'jquery' ], '', true );
	
	// Plugin JavaScript
	wp_enqueue_script( 'easing', $url . '/vendor/jquery-easing/jquery.easing.min.js', [ 'jquery' ], '', true );
	
	// Custom scripts for this template
	wp_enqueue_script( 'resume', $url . '/js/resume.min.js', [ 'jquery' ], '', true );
	
	wp_add_inline_script( 'jquery-core', '$ = jQuery;' );
}
add_action( 'wp_enqueue_scripts', 'resume_enqueue_scripts' );