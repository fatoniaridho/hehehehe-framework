<?php
/**
 * Custom Post Types Registration
 *
 * Use this file to register custom post types like 'Team Members', 'Portfolio', etc.
 */

function hehe_register_my_cpts() {

	/**
	 * Post Type: Team Members.
	 */
	$labels = [
		"name" => __( "Team Members", "hehe-framework" ),
		"singular_name" => __( "Team Member", "hehe-framework" ),
	];

	$args = [
		"label" => __( "Team Members", "hehe-framework" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "team", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-groups",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
	];

	register_post_type( "team_member", $args );
}

// Uncomment the line below to enable Team Members
add_action( 'init', 'hehe_register_my_cpts' );
