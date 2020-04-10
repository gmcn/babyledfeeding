<?php

/* Recipes CPT */
function videos_post_type() {
	$labels = array(
		'name'                  => _x( 'Videos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Videos', 'text_domain' ),
		'name_admin_bar'        => __( 'Video', 'text_domain' ),
		'archives'              => __( 'Recipes Archives', 'text_domain' ),
		'attributes'            => __( 'Recipes Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Videos', 'text_domain' ),
		'add_new_item'          => __( 'Add New Video', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Video', 'text_domain' ),
		'edit_item'             => __( 'Edit Video', 'text_domain' ),
		'update_item'           => __( 'Update Video', 'text_domain' ),
		'view_item'             => __( 'View Video', 'text_domain' ),
		'view_items'            => __( 'View Videoa', 'text_domain' ),
		'search_items'          => __( 'Search Recipes', 'text_domain' ),
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
		'label'                 => __( 'Video', 'text_domain' ),
		'description'           => __( 'Video information page.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', 'featured', 'page-attributes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-video',
		'taxonomies'          	=> array('tags', 'post_tag'),
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
    'show_in_rest'          => true,
		'rewrite'             	=> array( 'slug' => 'videos' ),
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'videos', $args );
}
add_action( 'init', 'videos_post_type', 0 );

add_action( 'init', 'videos_taxonomies', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function videos_taxonomies()
{
	// partners taxonomy
    $videos_cat_labels = array(
			'name'                => _x( 'Recipe Category', 'taxonomy general name' ),
			'singular_name'       => _x( 'Recipe Category', 'taxonomy singular name' ),
			'menu_name'           => __( 'Recipe Category' ),
    );
    $videos_cat_args = array(
        'labels'                     => $recipes_cat_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
				'show_in_rest'               => true,
        'show_tagcloud'              => true,
        'rewrite'                    => array('slug' => 'video-categories')
    );
    register_taxonomy( 'video-categories', array( 'videos' ), $videos_cat_args );
}
