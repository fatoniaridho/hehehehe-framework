<?php
/**
 * Register Block Patterns
 */

function hehe_register_block_patterns() {
    register_block_pattern_category(
        'hehe-hero',
        array( 'label' => __( 'Hero Sections', 'hehe-framework' ) )
    );

    register_block_pattern(
        'hehe-framework/simple-hero',
        array(
            'title'       => __( 'Simple Hero with Button', 'hehe-framework' ),
            'categories'  => array( 'hehe-hero' ),
            'content'     => '<!-- wp:group {"className":"bg-gray-100 p-12 text-center rounded-xl"} -->
<div class="wp-block-group bg-gray-100 p-12 text-center rounded-xl"><!-- wp:heading {"level":1, "className":"text-5xl font-bold mb-4"} -->
<h1 class="wp-block-heading text-5xl font-bold mb-4">Welcome to Our Modern Theme</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"text-xl text-gray-600 mb-8"} -->
<p class="text-xl text-gray-600 mb-8">This is a pre-made block pattern ready to use.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill bg-blue-600 text-white"} -->
<div class="wp-block-button is-style-fill bg-blue-600 text-white"><a class="wp-block-button__link wp-element-button">Get Started</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->',
        )
    );
}
add_action( 'init', 'hehe_register_block_patterns' );
