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
add_action( 'ninja_header', 'ninja_front_head',  10 );
add_action( 'ninja_header', 'ninja_front_head_after', 50 );

if ( ! function_exists('ninja_front_head_before' ) ) {
    /**
     * Before Header 
     * @since 1.0 
     * @author ninja
     */
    function ninja_front_head_before() {
        echo '<div class="ninja-container flex">';
    }
}

if ( !function_exists('ninja_front_head') ) {
    /**
     * Content Header 
     * @since 1.0
     * @author ninja
     */
    function ninja_front_head() {

        //View Template
        import_view( 'header' );
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
