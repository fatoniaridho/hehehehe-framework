<?php
/**
 * Hehe Framework functions and definitions
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function hehe_framework_setup() {
	load_theme_textdomain( 'hehe-framework', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'hehe-framework' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

    add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
add_action( 'after_setup_theme', 'hehe_framework_setup' );

/**
 * Enqueue scripts and styles.
 */
function hehe_framework_scripts() {
	// Enqueue output from Tailwind build
    wp_enqueue_style( 'hehe-framework-tailwind', get_template_directory_uri() . '/assets/css/app.css', array(), _S_VERSION );
    
    // Load main stylesheet for theme metadata (optional if styles are all in app.css)
	wp_enqueue_style( 'hehe-framework-style', get_stylesheet_uri(), array(), _S_VERSION );
    
    // Future assets
	// wp_enqueue_script( 'hehe-framework-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'hehe_framework_scripts' );

/**
 * Load Custom Framework Components
 */
// item 1: Custom Post Types (Placeholder)
// require get_template_directory() . '/inc/custom-post-types.php';
// item 2: Template Tags
// require get_template_directory() . '/inc/template-tags.php';
