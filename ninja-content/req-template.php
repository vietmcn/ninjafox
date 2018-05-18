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