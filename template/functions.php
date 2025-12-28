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
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hehe_framework_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'hehe-framework' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'hehe-framework' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s mb-8 p-6 bg-gray-50 rounded-lg">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title text-xl font-bold mb-4">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'hehe-framework' ),
			'id'            => 'footer-1',
            'description'   => esc_html__( 'First footer column.', 'hehe-framework' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s mb-6">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title text-lg font-bold mb-4 text-white">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'hehe_framework_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hehe_framework_scripts() {
	// Enqueue output from Tailwind build
    wp_enqueue_style( 'hehe-framework-tailwind', get_template_directory_uri() . '/assets/css/app.css', array(), _S_VERSION );
    
    // Load main stylesheet for theme metadata
	wp_enqueue_style( 'hehe-framework-style', get_stylesheet_uri(), array(), _S_VERSION );
    
    // Threaded comments
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hehe_framework_scripts' );

/**
 * Load Custom Framework Components
 */
// item 1: Custom Post Types (Placeholder)
// require get_template_directory() . '/inc/custom-post-types.php';
// item 2: Template Tags
// require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer Additions.
 */
require get_template_directory() . '/inc/theme-options.php';

/**
 * Block Patterns.
 */
require get_template_directory() . '/inc/patterns/block-patterns.php';

/**
 * TGM Plugin Recommendations (Optional - Uncomment if class-tgm exists)
 */
// require get_template_directory() . '/inc/plugin-recommendations.php';

