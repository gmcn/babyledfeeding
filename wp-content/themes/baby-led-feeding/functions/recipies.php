<?php

/* Recipes CPT */
function recipes_post_type() {
	$labels = array(
		'name'                  => _x( 'Recipes', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Recipe', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Recipes', 'text_domain' ),
		'name_admin_bar'        => __( 'Recipe', 'text_domain' ),
		'archives'              => __( 'Recipes Archives', 'text_domain' ),
		'attributes'            => __( 'Recipes Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Recipes', 'text_domain' ),
		'add_new_item'          => __( 'Add New Recipe', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Recipe', 'text_domain' ),
		'edit_item'             => __( 'Edit Recipe', 'text_domain' ),
		'update_item'           => __( 'Update Recipe', 'text_domain' ),
		'view_item'             => __( 'View Recipe', 'text_domain' ),
		'view_items'            => __( 'View Recipes', 'text_domain' ),
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
		'label'                 => __( 'Recipe', 'text_domain' ),
		'description'           => __( 'Recipe information page.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', 'featured', 'page-attributes', 'comments' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book',
    'taxonomies'            => array('recipe-categories', 'recipe-diet', 'recipe-type', 'post_tag'),
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
    'show_in_rest'          => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'recipes', $args );
}
add_action( 'init', 'recipes_post_type', 0 );

add_action( 'init', 'recipes_taxonomies', 0 );

//add taxonomies, genres and tags for the post type "tag"
function recipes_taxonomies()
{
	// Recipe Category taxonomy
    $recipes_cat_labels = array(
        'name'                => _x( 'Recipe Meal', 'taxonomy general name' ),
        'singular_name'       => _x( 'Recipe Meal', 'taxonomy singular name' ),
        'menu_name'           => __( 'Recipe Meal' ),
    );
    $recipes_cat_args = array(
        'labels'                     => $recipes_cat_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
				'show_in_rest'               => true,
        'show_tagcloud'              => true,
        'rewrite'                    => array('slug' => 'recipe-categories')
    );
    register_taxonomy( 'recipe-categories', array( 'recipes' ), $recipes_cat_args );

		// Recipe Category taxonomy
	    $recipes_diets_labels = array(
	        'name'                => _x( 'Recipe Diet', 'taxonomy general name' ),
	        'singular_name'       => _x( 'Recipe Diet', 'taxonomy singular name' ),
	        'menu_name'           => __( 'Recipe Diet' ),
	    );
	    $recipes_diets_args = array(
	        'labels'                     => $recipes_diets_labels,
	        'hierarchical'               => true,
	        'public'                     => true,
	        'show_ui'                    => true,
	        'show_admin_column'          => true,
	        'show_in_nav_menus'          => true,
					'show_in_rest'               => true,
	        'show_tagcloud'              => true,
	        'rewrite'                    => array('slug' => 'recipe-diet')
	    );
	    register_taxonomy( 'recipe-diets', array( 'recipes' ), $recipes_diets_args );

			// Recipe Category taxonomy
		    $recipes_type_labels = array(
		        'name'                => _x( 'Recipe Type', 'taxonomy general name' ),
		        'singular_name'       => _x( 'Recipe Type', 'taxonomy singular name' ),
		        'menu_name'           => __( 'Recipe Type' ),
		    );
		    $recipes_type_args = array(
		        'labels'                     => $recipes_type_labels,
		        'hierarchical'               => true,
		        'public'                     => true,
		        'show_ui'                    => true,
		        'show_admin_column'          => true,
		        'show_in_nav_menus'          => true,
						'show_in_rest'               => true,
		        'show_tagcloud'              => true,
		        'rewrite'                    => array('slug' => 'recipe-type')
		    );
		    register_taxonomy( 'recipe-type', array( 'recipes' ), $recipes_type_args );
}
