<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
/**
 * Import Class View 
 * 
 * @since 1.0 
 *
 */
import_view( 'view', 'front' );

add_action( 'ninja_header', 'ninja_front_head_before', 5 );
add_action( 'ninja_header', 'ninja_front_head',  10 );
add_action( 'ninja_header', 'ninja_front_head_after', 50 );

if ( ! function_exists('ninja_front_head_before' ) ) {
    function ninja_front_head_before() {
        echo '<div class="ninja-container flex">';
    }
}

if ( !function_exists('ninja_front_head') ) {

    function ninja_front_head() {
        
        $ninja_view = new Ninja_View_Front;
        //Render Logo Main
        $ninja_view->logo( array(
            'title' => get_bloginfo('name'),
            'url' => get_bloginfo('url'),
            'logo_img' => 'http://opencart.opencartworks.com/themes/so_emarket/layout2/image/catalog/logo2.png',
        ));
        //Form Search by Google
        $ninja_view->search();
    }
}

if ( ! function_exists('ninja_front_head_after' ) ) {
    function ninja_front_head_after() {
        echo '</div>';
    }
}
