<?php
/**
 * ninja Stylest and Script Javascript
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
 * @package wordpress
 * @subpackage ninja
 * @since 1.0
 */

add_action( 'wp_enqueue_scripts', function() {
	/**
	 * Setup Script 
	 * @link {https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts}
	 * @since 1.0
	 * @author ninja
	 */
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
				gcse.src = '//cse.google.com/cse.js?cx=' + cx;
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(gcse, s);
			})();
		</script>
	<?php 
} );