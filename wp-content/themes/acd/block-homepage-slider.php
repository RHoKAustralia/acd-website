<?php
/**
 *
 * @link https://organicthemes.com
 * @since 1.0.0
 * @package OPB
 *
 * Plugin Name: Homepage Slider Block
 * Plugin URI: https://www.acd.org.au/
 * Description: The Profile Block is created for the Gutenberg content editor.
 * Author: RHoK
 * Author URI: http://www.rhokaustralia.org/
 */
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * Define global constants.
 *
 * @since 1.0.0
 */
// Plugin version.
/*if ( ! defined( 'OPB_VERSION' ) ) {
    define( 'OPB_VERSION', '1.1.1' );
}
if ( ! defined( 'OPB_NAME' ) ) {
    define( 'OPB_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}
if ( ! defined( 'OPB_DIR' ) ) {
    define( 'OPB_DIR', WP_PLUGIN_DIR . '/' . OPB_NAME );
}
if ( ! defined( 'OPB_URL' ) ) {
    define( 'OPB_URL', WP_PLUGIN_URL . '/' . OPB_NAME );
} */
/**
 * BLOCK: Profile Block.
 */
require_once( '/blocks/homepage-slider/index.php' );