<?php
/**
 * Theme Options Customizer
 *
 * @package Hehe_Framework
 */

function hehe_framework_customize_register( $wp_customize ) {
	// Add Section: Theme Options
	$wp_customize->add_section( 'hehe_theme_options', array(
		'title'       => __( 'Theme Options', 'hehe-framework' ),
		'priority'    => 160,
		'capability'  => 'edit_theme_options',
		'description' => __('Kustomisasi pengaturan dasar tema.', 'hehe-framework'),
	) );

    // 1. Setting: Copyright Text
	$wp_customize->add_setting( 'hehe_copyright_text', array(
		'default'           => '© 2024 Hehe Framework. All rights reserved.',
		'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'hehe_copyright_text', array(
		'type'        => 'text',
		'section'     => 'hehe_theme_options',
		'label'       => __( 'Copyright Text', 'hehe-framework' ),
		'description' => __( 'Teks yang muncul di bagian paling bawah footer.', 'hehe-framework' ),
	) );

    // 2. Setting: Primary Color (Example for flexibility)
    $wp_customize->add_setting( 'hehe_primary_color', array(
		'default'           => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hehe_primary_color', array(
		'label'      => __( 'Warna Utama (Primary Color)', 'hehe-framework' ),
		'section'    => 'hehe_theme_options',
	) ) );

    // 3. Setting: Social Display
    $wp_customize->add_setting( 'hehe_show_social', array(
		'default'           => true,
		'sanitize_callback' => 'hehe_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'hehe_show_social', array(
		'type'        => 'checkbox',
		'section'     => 'hehe_theme_options',
		'label'       => __( 'Tampilkan Social Media?', 'hehe-framework' ),
	) );
}
add_action( 'customize_register', 'hehe_framework_customize_register' );

/**
 * Sanitize Checkbox
 */
function hehe_sanitize_checkbox( $checked ) {
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

/**
 * Helper function to retrieve theme options safely
 */
if ( ! function_exists( 'hehe_get_option' ) ) {
    function hehe_get_option( $option_name, $default = '' ) {
        return get_theme_mod( $option_name, $default );
    }
}
