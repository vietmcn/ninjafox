<?php
if ( !defined('ABSPATH') ) {
    exit;
}
/**
 * Render Only SCreen Device Mobile 
 * @since 1.0
 * @author ninja
 */
global $mobile;
if ( $mobile->isMobile() ) { 
    import_template( 'small', 'header' );
} else {
    import_template( 'large', 'header' );
}