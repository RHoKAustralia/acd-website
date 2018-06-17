<?php

add_theme_support( 'gutenberg', array(

    // Theme supports wide images, galleries and videos.
    'wide-images' => true,

    // Make specific theme colors available in the editor.
    'colors' => array(
        '#9D2CAF', //Purple
        '#009FE3', // Blue
        '#FF5B00', // Orange
        '#9AC72C', // Green
        '#727272',
        '#fffced',
        '#e6e3d5'
    ),

) );

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

    add_settings_field(
        'acd_logo',                         // ID used to identify the field throughout the theme
        'ACD Logo',                         // The label to the left of the option interface element
        'acd_logo_callback',                // The name of the function responsible for rendering the option interface
        'acd_settings',                 // The page on which this option will be displayed
        'acd_settings_section',         // The name of the section to which this field belongs
        array(                                // The array of arguments to pass to the callback. In this case, just a description.
            'Set this value to the desired logo image'
        )
    );

    add_settings_field(
        'number_of_families',                      // ID used to identify the field throughout the theme
        'Number of families helped',                           // The label to the left of the option interface element
        'families_counter_callback',   // The name of the function responsible for rendering the option interface
        'acd_settings',                          // The page on which this option will be displayed
        'acd_settings_section',         // The name of the section to which this field belongs
        array(                              // The array of arguments to pass to the callback. In this case, just a description.
            'Set this value to the number of goods distributed to display on the page.'
        )
    );

    register_setting(
        'acd_settings',
        'acd_logo'
    );

    register_setting(
        'acd_settings',
        'number_of_families'
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

function families_counter_callback($args) {
    echo '<input name="number_of_families" id="number_of_families" type="text" value="' . get_option( 'number_of_families' ) . '" />';

}

/* ------------------------------------------------------------------------ *
 * Field Callbacks
 * ------------------------------------------------------------------------ */

function acd_logo_callback($args) {
    echo '<input name="acd_logo" id="acd_logo" type="text" value="' . get_option( 'acd_logo' ) . '" />';

}


function custom_theme_setup() {
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );


//add_filter('xmlrpc_enabled', '__return_false'); // Possible attack vulnerability

require_once('block-init.php');
