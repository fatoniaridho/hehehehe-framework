<?php
/**
 * TGM Plugin Activation configuration
 */

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

// NOTE: You must download class-tgm-plugin-activation.php from http://tgmpluginactivation.com/download/
// and place it in the 'inc/' folder for this to work.

function hehe_register_required_plugins() {
	$plugins = array(
		array(
			'name'      => 'Tailwind CSS Forms',
			'slug'      => 'tailwind-css-forms', // Contoh, plugin opsional
            'required'  => false,
		),
        array(
			'name'      => 'Classic Editor',
			'slug'      => 'classic-editor',
            'required'  => false,
		),
	);

	$config = array(
		'id'           => 'hehe-framework',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'hehe_register_required_plugins' );
