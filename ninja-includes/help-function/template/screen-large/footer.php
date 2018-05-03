<?php 
/**
 * Template Footer 
 * @since 1.0
 * 
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
add_action( 'ninja_footer', function() {
    echo '<footer id="ninja-footer" class="footer">';
} );
add_action( 'ninja_footer', function() {
    echo '</footer>';
}, 55 );