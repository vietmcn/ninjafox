<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * Render Header 
 * @since 1.0
 * @hook ninja_header()
 * ninja_front_head()
 * 
 */
add_action( 'ninja_header', 'ninja_front_head_before', 5 );
add_action( 'ninja_header', 'ninja_front_head',        10 );
add_action( 'ninja_header', 'ninja_front_head_after', 50 );
