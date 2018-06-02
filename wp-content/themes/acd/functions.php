<?php

/* ------------------------------------------------------------------------ *
 * Setting Registration
 * ------------------------------------------------------------------------ */

/**
 * Initializes the theme options page by registering the Sections,
 * Fields, and Settings.
 *
 * This function is registered with the 'admin_init' hook.
 */

add_action( 'admin_menu', 'create_acd_settings_page');
function create_acd_settings_page() {

	  add_menu_page(
				'ACD Settings',
				'ACD',
				'manage_options',
				'acd_settings',
				'acd_settings_page_content',
				'dashicons-admin-plugins',
				 100
	  );
}

add_action('admin_init', 'acd_initialize_theme_options');
function acd_initialize_theme_options() {

    // First, we register a section. This is necessary since all future options must belong to one.
    add_settings_section(
        'acd_settings_section',         // ID used to identify this section and with which to register options
        'ACD Options',                  // Title to be displayed on the administration page
        'acd_general_options_callback', // Callback used to render the description of the section
        'acd_settings'                           // Page on which to add this section of options
    );

} // end sandbox_initialize_theme_options

function acd_settings_page_content() {
	echo '<div class="wrap"><h2>ACD</h2><form method="post" action="options.php">';
	echo settings_fields( 'acd_settings' );
	echo do_settings_sections( 'acd_settings' );
	echo submit_button();
	echo '</form></div>';
}

/* ------------------------------------------------------------------------ *
 * Section Callbacks
 * ------------------------------------------------------------------------ */

function acd_general_options_callback() {
    echo '<p>Fill in configurable options for the ACD site</p>';
} // end sandbox_general_options_callback

/* ------------------------------------------------------------------------ *
 * Field Callbacks
 * ------------------------------------------------------------------------ */



function custom_theme_setup() {
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );


//add_filter('xmlrpc_enabled', '__return_false'); // Possible attack vulnerability

/* ------------------------------------------------------------------------ *
 * Gutenberg Blocks
 * ------------------------------------------------------------------------ */

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

