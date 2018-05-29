<?php 
/**
 * Display render header mobile
 * @since 1.0
 * @author ninja
 */
if ( !defined('ABSPATH') ) {
    exit;
}
/**
 * List Hook Template
 * @link {https://codex.wordpress.org/Plugin_API/Hooks}
 * @since 1.0 
 * @author ninja
 */
add_action( 'ninja_header', 'ninja_header_mobile_before',   5 );
add_action( 'ninja_header', 'ninja_header_mobile_top',     10 );
add_action( 'ninja_header', 'ninja_header_mobile_bottom',  15 );
add_action( 'ninja_header', 'ninja_header_mobile_after',   55 );
/**
 * Add Stylelist Mobile 
 * @link {https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts}
 * @since 1.0 
 * @author ninja
 */
add_action( 'wp_enqueue_scripts', function() {
    global $ninja_ver;
    wp_enqueue_style( 'ninja-screen-small-all', get_template_directory_uri().'/ninja-assets/css/screen-small-all.min.css', '', $ninja_ver );
} );
//Render Function
if ( !function_exists('ninja_header_mobile_before') ) {
    /**
     * Display before container header mobile
     * @since 1.0
     * @author ninja
     */
    function ninja_header_mobile_before()
    {
        echo '<div id="mobile-header" data-mobile="header" class="ninja-container">';
    }
}
if ( !function_exists('ninja_header_mobile_top') ) {
    
    function ninja_header_mobile_top()
    {
        
    }
}
if ( !function_exists('ninja_header_mobile_bottom') ) {
    /**
     * Display Bottom nav Menu
     * @link {}
     * @since 1.0
     * @author ninja
     */
    function ninja_header_mobile_bottom()
    {
        $out  = '<nav id="ninja-nav" class="row">';
        //Trang Chủ
        $out .= '<a class="flex" href="'.get_bloginfo('url').'"><ion-icon ios="ios-home" md="md-home"></ion-icon><span>Trang Chủ</span></a>';
        //Danh Mục
        $out .= '<a id="ninja-category" class="ninja-categorys flex" href="/danh-muc" title="Danh Mục Sản Phẩm"><ion-icon name="apps"></ion-icon><span>Danh Mục</span></a>';
        //Cart
        $out .= '<a id="ninja-cart" class="flex cart" href="'.esc_url( wc_get_cart_url() ).'" title="'.esc_attr( 'Kiểm tra giỏ hàng của bạn', 'ninjafox' ).'">';
        if ( WC()->cart->get_cart_contents_count() ) {
            $out .= '<span class="count">'.wp_kses_data( WC()->cart->get_cart_contents_count() ).'</span>';
        }
        $out .= '<ion-icon name="cart"></ion-icon>';
        $out .= '<span>giỏ hàng</span>';
        $out .= '</a>';
        //Account
        $out .= '<a id="ninja-account" href="/tai-khoan" title="Tài khoản của bạn" class="flex"><ion-icon ios="ios-contacts" md="md-contacts"></ion-icon><span>Tài Khoản</span></a>';
        $out .= '</nav>';
        render( $out );
    }
}
if ( !function_exists('ninja_header_mobile_after') ) {
    /**
     * Display after container header mobile
     * @since 1.0
     * @author ninja
     */
    function ninja_header_mobile_after()
    {
        echo '</div>';
    }
}