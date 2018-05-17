<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
//View
import_view( 'header' );
/**
 * List Hook Template
 * @link {https://codex.wordpress.org/Plugin_API/Hooks}
 * @since 1.0 
 * @author ninja
 */
add_action( 'ninja_header', 'ninja_front_head_before', 5 );
add_action( 'ninja_header', 'ninja_front_head',        10 );
add_action( 'ninja_header', 'ninja_front_head_cart',   20 );
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

        $ninja_view = new Ninja_View_Front;

        //Render Logo Main
        $ninja_view->logo( array(
            'url' => get_bloginfo('url'),
            'title' => get_bloginfo('name'),
            'logo_img' => '//opencart.opencartworks.com/themes/so_emarket/layout2/image/catalog/logo2.png',
        ));
        /**
         * Render Search Form Google Case
         * @link {}
         * @since 1.0
         * @author ninja
         */ 
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
        
        ?>
            <a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'storefront' ); ?>">
                <span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> 
                <span class="count"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'storefront' ), WC()->cart->get_cart_contents_count() ) );?></span>
            </a>
        <?php 

    }
}
if ( ! function_exists('ninja_front_head_after' ) ) {
    /**
     * after Header Container 
     * @since 1.0
     * @author ninja
     */
    function ninja_front_head_after() {
        echo '</div>';
    }
}
