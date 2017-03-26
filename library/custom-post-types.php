
<?php
/**
 * Register Custom Post Types 
 *
 * @link http://codex.wordpress.org/Post_Types
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
 
// Register Custom Post Type
function create_coach_list() {

	$labels = array(
		'name'                  => _x( 'Coaches', 'Post Type General Name', 'coach_list' ),
		'singular_name'         => _x( 'Coach', 'Post Type Singular Name', 'coach_list' ),
		'menu_name'             => __( 'Coaches', 'coach_list' ),
		'name_admin_bar'        => __( 'Coaches', 'coach_list' ),
		'archives'              => __( 'Coaches Archive', 'coach_list' ),
		'attributes'            => __( 'Item Attributes', 'coach_list' ),
		'parent_item_colon'     => __( 'Parent Item:', 'coach_list' ),
		'all_items'             => __( 'All Coaches', 'coach_list' ),
		'add_new_item'          => __( 'Add New Coach', 'coach_list' ),
		'add_new'               => __( 'Add New Coach', 'coach_list' ),
		'new_item'              => __( 'New Coach', 'coach_list' ),
		'edit_item'             => __( 'Edit Coach', 'coach_list' ),
		'update_item'           => __( 'Update Coach', 'coach_list' ),
		'view_item'             => __( 'View Coach', 'coach_list' ),
		'view_items'            => __( 'View Coaches', 'coach_list' ),
		'search_items'          => __( 'Search Coach', 'coach_list' ),
		'not_found'             => __( 'Not found', 'coach_list' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'coach_list' ),
		'featured_image'        => __( 'Featured Image', 'coach_list' ),
		'set_featured_image'    => __( 'Set featured image', 'coach_list' ),
		'remove_featured_image' => __( 'Remove featured image', 'coach_list' ),
		'use_featured_image'    => __( 'Use as featured image', 'coach_list' ),
		'insert_into_item'      => __( 'Insert into item', 'coach_list' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'coach_list' ),
		'items_list'            => __( 'Items list', 'coach_list' ),
		'items_list_navigation' => __( 'Items list navigation', 'coach_list' ),
		'filter_items_list'     => __( 'Filter items list', 'coach_list' ),
	);
	$args = array(
		'label'                 => __( 'Coach', 'coach_list' ),
		'description'           => __( 'A custom post type that generates a coach', 'coaches' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'coaches', $args );

}
add_action( 'init', 'create_coach_list', 0 );