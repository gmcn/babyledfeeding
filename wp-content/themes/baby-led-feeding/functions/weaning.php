<?php

/* Weaning CPT */
function weaning_post_type() {
	$labels = array(
		'name'                  => _x( 'Weaning', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Weaning', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Weaning', 'text_domain' ),
		'name_admin_bar'        => __( 'Weaning', 'text_domain' ),
		'archives'              => __( 'Weaning Archives', 'text_domain' ),
		'attributes'            => __( 'Weaning Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Weaning', 'text_domain' ),
		'add_new_item'          => __( 'Add New Weaning', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Weaning', 'text_domain' ),
		'edit_item'             => __( 'Edit Weaning', 'text_domain' ),
		'update_item'           => __( 'Update Weaning', 'text_domain' ),
		'view_item'             => __( 'View Weaning', 'text_domain' ),
		'view_items'            => __( 'View Weaning', 'text_domain' ),
		'search_items'          => __( 'Search Weaning', 'text_domain' ),
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
		'label'                 => __( 'Weaning', 'text_domain' ),
		'description'           => __( 'Weaning information page.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', 'featured', 'page-attributes', 'comments' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book',
    'taxonomies'            => array('weaning-categories', 'post_tag'),
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
    'show_in_rest'          => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'weaning', $args );
}
add_action( 'init', 'weaning_post_type', 0 );

add_action( 'init', 'weaning_taxonomies', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function weaning_taxonomies()
{
	// partners taxonomy
    $weaning_cat_labels = array(
        'name'                => _x( 'Weaning Category', 'taxonomy general name' ),
        'singular_name'       => _x( 'Weaning Category', 'taxonomy singular name' ),
        'menu_name'           => __( 'Weaning Category' ),
    );
    $weaning_cat_args = array(
        'labels'                     => $weaning_cat_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
				'show_in_rest'               => true,
        'show_tagcloud'              => true,
        'rewrite'                    => array('slug' => 'weaning-categories')
    );
    register_taxonomy( 'weaning-categories', array( 'weaning' ), $weaning_cat_args );
}
