<?php

/* Weaning CPT */
function mealplanner_post_type() {
	$labels = array(
		'name'                  => _x( 'Meal Planner', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Meal Planner', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Meal Planner', 'text_domain' ),
		'name_admin_bar'        => __( 'Meal Planner', 'text_domain' ),
		'archives'              => __( 'Meal Planner Archives', 'text_domain' ),
		'attributes'            => __( 'Meal Planner Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Meal Plans', 'text_domain' ),
		'add_new_item'          => __( 'Add New Meal Plan', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Meal Planner', 'text_domain' ),
		'edit_item'             => __( 'Edit Meal Planner', 'text_domain' ),
		'update_item'           => __( 'Update Meal Planner', 'text_domain' ),
		'view_item'             => __( 'View Meal Planner', 'text_domain' ),
		'view_items'            => __( 'View Meal Planner', 'text_domain' ),
		'search_items'          => __( 'Search Meal Planner', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Meal Planner', 'text_domain' ),
		'description'           => __( 'Meal Planner information page.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', 'featured', 'page-attributes', 'comments' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar-alt',
    'taxonomies'            => array('mealplanner-categories', 'post_tag'),
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
    'show_in_rest'          => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'mealplanner', $args );
}
add_action( 'init', 'mealplanner_post_type', 0 );
