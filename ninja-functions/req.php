<?php
if ( !defined('ABSPATH') ) {
    exit;
}
/**
 * Render Only SCreen Device Mobile 
 * @since 1.0
 * @author ninja
 */
global $ninja_mobile;

switch( $ninja_mobile ) {
    
    case $ninja_mobile->isTablet() :
        /**
         * Template For Tablet
         * @since 1.0
         * @author ninjafox
         */
        break;

    case $ninja_mobile->isMobile() :
        /**
         * Template For Mobile
         * @since 1.0
         * @author ninjafox
         */
        import_template( 'small', 'header' );
        break;
    default:
        /**
         * Template For Desktop
         * @since 1.0
         * @author ninjafox
         */
        import_template( 'large', 'header' );
        break;
}