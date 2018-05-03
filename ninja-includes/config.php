<?php
/**
 * Ninja Config Temp
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
 * @since 
 */

/**
 * Import Class
 * @since 1.0
 */
require_once 'class/class-mobile-detect.php';
require_once 'class/class-extend.php';
require_once 'class/class-config.php';
/**
 * Import help function
 * @since 1.0
 */
require_once 'help-function/config.php';

/**
 * Set up template
 *
 * @since 1.0
 */
add_action('after_setup_theme', function() {
    /*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyfifteen
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'ninja' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
    add_theme_support( 'title-tag' );
    /*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	#add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentyfifteen_fonts_url() ) );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'ninja_menu_header' => __( 'Menu Header',  'ninja' ),
	) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	//Declare WC support
	add_theme_support( 'woocommerce' );
} );

/**
 * Remove Bar Admin
 * @since 1.0
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Setup Script 
 * javascript
 * Style
 * @since 1.0
 */
add_action( 'wp_enqueue_scripts', function() {
	
	global $ninja_ver;

	wp_enqueue_style( 'ninja-style', get_template_directory_uri() . '/style.css', '', $ninja_ver );
	wp_enqueue_style( 'ninja-screen', get_template_directory_uri() . '/ninja-assets/css/screen.min.css', '', $ninja_ver );
	wp_enqueue_style( 'ninja-font', '//fonts.googleapis.com/css?family=Quicksand:400,500,700', '', $ninja_ver );

} );

add_action('wp_footer', function() {
	?>
		<script>
			(function() {
				var cx = '011986442607755133710:kfeywyfxn94';
				var gcse = document.createElement('script');
				gcse.type = 'text/javascript';
				gcse.async = true;
				gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(gcse, s);
			})();
		</script>
	<?php 
} );