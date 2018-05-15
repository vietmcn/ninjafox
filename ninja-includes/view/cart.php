<?php 
if ( !defined( ABSPATH ) ) {
    exit;
}
if ( !class_exists( 'Ninja_WCCart' ) ) :
    class Ninja_WCCart
    {
        public function __construct()
        {
            /**
             * Cart fragment
             *
             * @see storefront_cart_link_fragment()
             */
            if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.3', '>=' ) ) {
                add_filter( 'woocommerce_add_to_cart_fragments', 'ninja_cart_link_fragment' );
            } else {
                add_filter( 'add_to_cart_fragments', 'ninja_cart_link_fragment' );
            }
        }
        public function ninja_cart_link_fragment( $fragments )
        {
            /**
             * Cart Fragments
             * Ensure cart contents update when products are added to the cart via AJAX
             *
             * @param  array $fragments Fragments to refresh via AJAX.
             * @return array            Fragments to refresh via AJAX
             */
            global $woocommerce;

            ob_start();
            $this->ninja_cart_link();
            $fragments['a.cart-contents'] = ob_get_clean();
            return $fragments;
        }
        public function ninja_cart_link() {
            /**
             * Cart Link
             * Displayed a link to the cart including the number of items present and the cart total
             *
             * @return void
             * @since  1.0.0
             */
           ?>
               <a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'storefront' ); ?>">
                   <span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'storefront' ), WC()->cart->get_cart_contents_count() ) );?></span>
               </a>
           <?php
       }
    }
endif;