<?php
/**
 * BLOCK: Homepage Slider
 *
 * Gutenberg Custom Profile Block assets.
 *
 */
// Exit if accessed directly.
// if ( ! defined( 'ABSPATH' ) ) {
// 	exit;
// }
/**
 * Enqueue the block's assets for the editor.
 *
 * `wp-blocks`: Includes block type registration and related functions.
 * `wp-element`: Includes the WordPress Element abstraction for describing the structure of your blocks.
 * `wp-i18n`: To internationalize the block's text.
 *
 * @since 1.0.0
 */
function block_homepage_slider() {
    // Scripts.
    wp_register_script(
        'block-homepage-slider-script', // Handle.
        plugins_url( 'block.js', __FILE__ ), // Block.js: We register the block here.
        array( 'wp-blocks', 'wp-element', 'wp-i18n' ) // Dependencies, defined above.
    );
    // Styles.
    wp_register_style(
        'block-homepage-slider-editor-style', // Handle.
        plugins_url( 'editor.css', __FILE__ ), // Block editor CSS.
        array( 'wp-edit-blocks' ) // Dependency to include the CSS after it.
    );
    wp_register_style(
        'block-homepage-slider-frontend-style', // Handle.
        plugins_url( 'style.css', __FILE__ ), // Block editor CSS.
        array( 'wp-edit-blocks' ) // Dependency to include the CSS after it.
    );
    wp_enqueue_style(
        'block-homepage-slider-fontawesome', // Handle.
        plugins_url( '../../font-awesome.css', __FILE__ ) // Font Awesome for social media icons.
    );
    // Here we actually register the block with WP, again using our namespacing
    // We also specify the editor script to be used in the Gutenberg interface
    register_block_type( 'homepage-slider/block', array(
        'editor_script' => 'block-homepage-slider-script',
        'editor_style' => 'block-homepage-slider-editor-style',
        'style' => 'block-homepage-slider-frontend-style',
    ) );
} // End function organic_profile_block().
// Hook: Editor assets.
add_action( 'init', 'block_homepage_slider' );