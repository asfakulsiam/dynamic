<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


function testfinal_scripts() {
	wp_enqueue_style( 'testfinal-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'testfinal-boot', get_template_directory_uri().'./assets/css/bootstrap.min.css', 'rtl', 'replace' );

	wp_enqueue_script( 'testfinal-navigation', get_template_directory_uri() . './assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true);
}
add_action( 'wp_enqueue_scripts', 'testfinal_scripts' );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo');

register_nav_menus([
	'TM'=> 'Primary',
	'FM'=> 'Footer'
]);

register_sidebar([
	'name' => 'Main Banner',
	'id' => 'mainbanner',
	'before_widget' => '',
	'after_widget' => ''
]);


register_sidebar([
	'name' => 'Side Image',
	'id' => 'sideimg',
	'before_widget' => '',
	'after_widget' => ''
]);



?>