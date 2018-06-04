<?php
/**
 * Display HEader Template For Screen Large
 * @since 1.0
 * @author ninja 
 */

if ( !defined('ABSPATH') ) {
    exit;
}
/**
 * List Hook Template
 * @link {https://codex.wordpress.org/Plugin_API/Hooks}
 * @since 1.0 
 * @author ninja
 */
add_action( 'ninja_header', 'ninja_header_before', 5 );
add_action( 'ninja_header', 'ninja_header_logo', 10 );
add_action( 'ninja_header', 'ninja_header_after', 55 );
/**
 * Function Template Header
 * @link {}
 * @since 1.0
 * @author ninja
 */
if ( !function_exists( 'ninja_header_before' ) ) {
    /**
     * Display Before Header 
     * @since 1.0 
     * @author ninja
     */
    function ninja_header_before() 
    {
        echo '<div class="ninja-container flex">';
    }
}
if ( !function_exists( 'ninja_header_logo' ) ) {
    /**
     * Display Logo Template 
     * @use get_bloginfo()
     * @link {https://developer.wordpress.org/reference/functions/get_bloginfo/}
     * @since 1.0
     * @author ninja
     */
    function ninja_header_logo()
    {
        if ( is_home() || is_front_page() ) {
            $h = 'h1';
        } else {
            $h = 'div';
        }
        $out  = '<'.$h.' id="ninja-class-head" class="">';
        $out .= '<a href="'.get_bloginfo('url').'" title="'.get_bloginfo('name').'">';
        $out .= 'Trangfox.com';
        $out .= '</a>';
        $out .= '</'.$h.'>';
        echo $out;
    }
}
if ( !function_exists( 'ninja_header_after' ) ) {
    /**
     * Display after header container
     * @since 1.0
     * @author ninja
     */
    function ninja_header_after()
    {
        echo '</div>';
    }
}