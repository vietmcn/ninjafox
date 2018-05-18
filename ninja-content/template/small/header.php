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
 * List Hook Template
 * @link {https://codex.wordpress.org/Plugin_API/Hooks}
 * @since 1.0 
 * @author ninja
 */
add_action( 'ninja_header', 'ninja_header_mobile_before', 5 );
add_action( 'ninja_header', 'ninja_header_mobile_logo',   10 );
add_action( 'ninja_header', 'ninja_header_mobile_after',  55 );
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
if ( !function_exists('ninja_header_mobile_logo') ) {
    /**
     * Display after container header mobile
     * @since 1.0
     * @author ninja
     */
    function ninja_header_mobile_after()
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