<?php
/**
 * Import Template
 * Desktop+
 * Mobile+
 * @since 1.0
 * 
 */ 
if ( !defined('ABSPATH') ) {
    exit;
}
global $ninja_mobile;

if ( $ninja_mobile->isMobile() ) {

} else {
    /**
     * Template Header
     * @since 1.0
     * 
     */
    import_template( 'large', 'header' );
    import_template( 'large', 'front' );
    /**
     * Template Footer 
     * @since 1.0
     */
    import_template( 'large', 'footer' );
}
