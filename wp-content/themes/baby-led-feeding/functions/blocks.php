<?php


function register_acf_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'about',
        'title'             => __('About'),
        'description'       => __('A custom about block.'),
        'render_template'   => 'inc/blocks/about.php',
        'category'          => 'formatting',
        'icon'              => 'dashicons-align-left',
        'keywords'          => array( 'about' ),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
