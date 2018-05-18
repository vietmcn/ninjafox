<?php
/**
 * Ninja functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package 
 * @subpackage 
 * @since 1.0
 */

/**
 * Defined Import Folder 
 *
 * @since 1.0
 */

if ( ! defined( 'N_EXTEND_FOLDER' ) ) {
	define( 'N_EXTEND_FOLDER', __DIR__ );
}

/**
 * Crate function import view
 *
 * @since 1.0
 */
if ( ! function_exists( 'import_view' ) ) {
    function import_view( $name = NULL ) {
		$inc = 'ninja-includes';
		$view = 'view';
		require_once ( N_EXTEND_FOLDER .'/'.$inc.'/'.$view.'/'.$name.'.php' );
    }
}
/**
 * Crate function import_template
 *
 * @since 1.0
 */
if ( ! function_exists( 'import_template' ) ) {
	function import_template( $folder = NULL, $name = NULL ) {
		$inc = 'ninja-content';
		$template = 'template';
		require_once ( N_EXTEND_FOLDER .'/'.$inc.'/'.$template.'/'.$folder.'/'.$name.'.php' );
	}
}

/**
 * GET the Version Template
 *
 * @since 1.0
 */
$theme       = wp_get_theme( 'ninja' );
$ninja_ver   = $theme['Version'];

/**
 * import Check Device
 * @since 1.0
 * @author ninja
 */
require_once 'ninja-includes/class.mobile-detect.php';
$mobile = new Mobile_Detect;
/**
 * 
 */
require_once 'ninja-includes/_config-template.php';
/**
 * 
 */
require_once 'ninja-content/req-template.php';