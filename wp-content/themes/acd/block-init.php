<?php
/* ------------------------------------------------------------------------ *
 * Gutenberg Blocks
 * ------------------------------------------------------------------------ */

function block_homepage_slider() {
    // Scripts.
    wp_register_script(
        'block-homepage-slider-script', // Handle.
        get_template_directory_uri().'/blocks/homepage-slider/block.js', // Block.js: We register the block here.
        array( 'wp-blocks', 'wp-element', 'wp-i18n' ) // Dependencies, defined above.
    );

    // Styles
    wp_register_style(
        'block-homepage-slider-editor-style', // Handle.
        get_template_directory_uri().'/blocks/homepage-slider/editor.css', // Block editor CSS.
        array( 'wp-edit-blocks' ) // Dependency to include the CSS after it.
    );
    wp_register_style(
        'block-homepage-slider-frontend-style', // Handle.
        get_template_directory_uri().'/blocks/homepage-slider/style.css', // Block editor CSS.
        array( 'wp-edit-blocks' ) // Dependency to include the CSS after it.
    );
    wp_enqueue_style(
        'block-homepage-slider-fontawesome', // Handle.
        get_template_directory_uri().'font-awesome.css' // Font Awesome for social media icons.
    );
    // Here we actually register the block with WP, again using our namespacing
    // We also specify the editor script to be used in the Gutenberg interface
    register_block_type( 'homepage-slider/block', array(
        'editor_script' => 'block-homepage-slider-script',
        'editor_style' => 'block-homepage-slider-editor-style',
        'style' => 'block-homepage-slider-frontend-style',
    ) );

} // End function organic_profile_block().
add_action( 'init', 'block_homepage_slider' );