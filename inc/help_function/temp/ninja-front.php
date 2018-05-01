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
import( 'view', 'front' );

if ( ! function_exists('ninja_front_head_before' ) ) {
    function ninja_front_head_before() {
        echo '<div class="ninja-container">';
    }
}
if ( ! function_exists('ninja_front_head_after' ) ) {
    function ninja_front_head_after() {
        echo '</div>';
    }
}
if ( !function_exists('ninja_front_head') ) {
    /**
     * Render Front  
     * @Hook ninja_header()
     * -> logo 
     * -> Search From
     * -> Cart
     * -> Account
     * 
     * @since 1.0
     */
    function ninja_front_head() {

        $ninja_view = new Ninja_View_Front;
        //Logo
        $ninja_view->logo( array(
            'title' => get_bloginfo('name'),
            'url' => get_bloginfo('url'),
            'logo' => 'Trangfox.com',
        ));
    }
}