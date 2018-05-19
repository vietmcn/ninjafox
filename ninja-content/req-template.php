<?php
/**
 * Import Template 
 * @since 1.0
 * @author 1.0
 */
if ( !defined('ABSPATH') ) {
    exit;
}

add_action( 'wp_enqueue_scripts', function() {
	/**
	 * Setup Stylelist + Javascript 
	 * @link {https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts}
	 * @since 1.0
	 * @author ninja
	 */
    global $ninja_ver;
    //Css
	wp_enqueue_style( 'ninja-style', get_template_directory_uri() . '/style.css', '', $ninja_ver );
    wp_enqueue_style( 'ninja-screen', get_template_directory_uri() . '/ninja-assets/css/screen.min.css', '', $ninja_ver );
    wp_enqueue_style( 'ninja-font', '//fonts.googleapis.com/css?family=Quicksand:400,500,700', '', $ninja_ver );
    //Javascript
    wp_enqueue_script( 'ninja-icon', '//unpkg.com/ionicons@4.1.1/dist/ionicons.js', array('jquery'), '4.1.1', true );
} );

/**
 * Render Only SCreen Device Mobile 
 * @since 1.0
 * @author ninja
 */
global $mobile;

switch( $mobile ) {

    case $mobile->isTablet() :
        echo 'Tablet';
        break;
    case $mobile->isMobile() :
        //import template
        import_template( 'small', 'header' );
        break;
    default:
        import_template( 'large', 'header' );
        break;
}