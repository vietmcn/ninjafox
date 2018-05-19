<?php 
/**
 * Display render header mobile
 * @since 1.0
 * @author ninja
 */
if ( !defined('ABSPATH') ) {
    exit;
}

/**
 * Add Stylelist Mobile 
 * @link {https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts}
 * @since 1.0 
 * @author ninja
 */
add_action( 'wp_enqueue_scripts', function() {
    global $ver;
    if ( is_singular( 'product' ) ) {
        wp_enqueue_style( 'ninja-screen-small-all', get_template_directory_uri().'/ninja-assets/css/single-product-small.min.css', '', $ver );
    } else {

    }
    wp_enqueue_style( 'ninja-screen-small-all', get_template_directory_uri().'/ninja-assets/css/screen-small-all.min.css', '', $ver );
} );
/**
 * List Hook Template
 * @link {https://codex.wordpress.org/Plugin_API/Hooks}
 * @since 1.0 
 * @author ninja
 */
add_action( 'ninja_header', 'ninja_header_mobile_before',   5 );
add_action( 'ninja_header', 'ninja_header_mobile_top_nav',     10 );
add_action( 'ninja_header', 'ninja_header_mobile_bottom',  15 );
add_action( 'ninja_header', 'ninja_header_mobile_after',   55 );
//Render Function
if ( !function_exists('ninja_header_mobile_before') ) {
    /**
     * Display before container header mobile
     * @since 1.0
     * @author ninja
     */
    function ninja_header_mobile_before()
    {
        echo '<div id="mobile-header" data-mobile="header" class="ninja-container">';
    }
}
if ( !function_exists('ninja_header_mobile_top') ) {
    /**
     * Display logo 
     * @divce mobile
     * @since 1.0
     * @author ninja
     */
    function ninja_header_mobile_top_nav()
    {
        if ( is_home() || is_front_page() ) {
            $h = 'h1';
        } else {
            $h = 'span';
        }
        $out  = '<nav id="ninja-nav">';
        $out .= '<'.$h.' id="ninja-logo">';
        $out .= '<a href="'.get_bloginfo('url').'">Trangfox.com</a>';
        $out .= '</'.$h.'>';
        $out .= '</nav>';
        echo $out;
    }
}
if ( !function_exists('ninja_header_mobile_bottom') ) {
    /**
     * Display Bottom nav Menu
     * @since 1.0
     * @author ninja
     */
    function ninja_header_mobile_bottom()
    {
        
    }
}
if ( !function_exists('ninja_header_mobile_after') ) {
    /**
     * Display after container header mobile
     * @since 1.0
     * @author ninja
     */
    function ninja_header_mobile_after()
    {

    }
}