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
    global $ninja_ver;
    wp_enqueue_style( 'ninja-screen-small-all', get_template_directory_uri().'/ninja-assets/css/screen-small-all.min.css', '', $ninja_ver );
} );
/**
 * List Hook Template
 * @link {https://codex.wordpress.org/Plugin_API/Hooks}
 * @since 1.0 
 * @author ninja
 */
add_action( 'ninja_header', 'ninja_header_mobile_before',   5 );
add_action( 'ninja_header', 'ninja_header_mobile_top',     10 );
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
    
    function ninja_header_mobile_top()
    {
        
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
        if ( is_home() || is_front_page() ) {
            $h = 'h1';
        } else {
            $h = 'span';
        }
        $out  = '<nav id="ninja-nav">';
        $out .= '<'.$h.' id="ninja-logo">';
        $out .= '<a href="'.get_bloginfo('url').'">Trangfox.com</a>';
        $out .= '</'.$h.'>';
        $out .= '<a id="ninja-category" class="ninja-categorys" href="/danh-muc" title="Danh Mục Sản Phẩm"><ion-icon name="keypad"></ion-icon></a>';
        $out .= '</nav>';
        echo $out;
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