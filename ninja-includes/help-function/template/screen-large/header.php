<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
/**
 * List Hook Template
 * @link {https://codex.wordpress.org/Plugin_API/Hooks}
 * @since 1.0 
 * @author ninja
 */
add_action( 'ninja_header', 'ninja_front_head_before', 5 );
add_action( 'ninja_header', 'ninja_front_head',        10 );
add_action( 'ninja_header', 'ninja_front_head_cart',   15 );
add_action( 'ninja_header', 'ninja_front_head_after',  50 );

if ( ! function_exists('ninja_front_head_before' ) ) {
    /**
     * Display Before Header 
     * @since 1.0 
     * @author ninja
     */
    function ninja_front_head_before() {
        echo '<div class="ninja-container flex">';
    }
}

if ( !function_exists('ninja_front_head') ) {
    /**
     * Display Content Header 
     * @since 1.0
     * @author ninja
     */
    function ninja_front_head() {

        //View Template
        import_view( 'header' );
        $ninja_view = new Ninja_View_Front;

        //Render Logo Main
        $ninja_view->logo( array(
            'url' => get_bloginfo('url'),
            'title' => get_bloginfo('name'),
            'logo_img' => '//opencart.opencartworks.com/themes/so_emarket/layout2/image/catalog/logo2.png',
        ));
        
        //Form Search by Google
        $ninja_view->search();
    }
}

if ( !function_exists( 'ninja_front_head_cart' ) ) {
    /**
	 * Display Header Cart
	 *
	 * @since  1.0.0
	 * @uses  storefront_is_woocommerce_activated() check if WooCommerce is activated
	 * @return void
	 */
    function ninja_front_head_cart() {
        //import Cart
        import_view( 'cart' );
        $ninja_cart = new Ninja_WCCart;
        $ninja_cart->ninja_cart_link();
    }
}

if ( ! function_exists('ninja_front_head_after' ) ) {
    function ninja_front_head_after() {
        echo '</div>';
    }
}
