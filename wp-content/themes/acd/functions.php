<?php
/**
 * Created by PhpStorm.
 * User: pixie
 * Date: 2/6/18
 * Time: 12:53 PM
 */

// Gutenberg blocks

function block_homepage_slider() {
    // Scripts.
    wp_register_script(
        'block-homepage-slider-script', // Handle.
        plugins_url( 'blocks/homepage-slider/block.js', __FILE__ ), // Block.js: We register the block here.
        array( 'wp-blocks', 'wp-element', 'wp-i18n' ) // Dependencies, defined above.
    );

    // Styles
    wp_register_style(
        'block-homepage-slider-editor-style', // Handle.
        plugins_url( 'blocks/homepage-slider/editor.css', __FILE__ ), // Block editor CSS.
        array( 'wp-edit-blocks' ) // Dependency to include the CSS after it.
    );
    wp_register_style(
        'block-homepage-slider-frontend-style', // Handle.
        plugins_url( 'blocks/homepage-slider/style.css', __FILE__ ), // Block editor CSS.
        array( 'wp-edit-blocks' ) // Dependency to include the CSS after it.
    );

} // End function organic_profile_block().
add_action( 'init', 'block_homepage_slider' );



/*function gutenberg_boilerplate_block() {
    wp_register_script(
        'gutenberg-boilerplate-es5-step01',
        plugins_url( 'step-01/block.js', __FILE__ ),
        array( 'wp-blocks', 'wp-element' )
    );

    register_block_type( 'gutenberg-boilerplate-es5/hello-world-step-01', array(
        'editor_script' => 'gutenberg-boilerplate-es5-step01',
    ) );
}
add_action( 'init', 'gutenberg_boilerplate_block' ); */