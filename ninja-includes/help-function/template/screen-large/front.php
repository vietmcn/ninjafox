<?php 
/**
 * Template Index/Front/Page
 * @since 1.0
 * 
 */
if ( !defined('ABSPATH') ) {
    exit;
}
if ( is_home() || is_front_page() ) {
    return;
}
add_action( 'ninja_front', function() {
    import_view('view', 'swiper' );
    /**
     * Template Slider
     * Learn more: {@link http://idangero.us/swiper/}
     * @since 0.1
     */
    $ninja_slider = new Ninja_View_Slider;
    
    $out  = '<article id="ninja-slide-front">';
    $out .= $ninja_slider->basic( array(
        'echo' => false,
    ) );
    $out .= 'Hello World';
    $out .= '</aricle>';
    echo $out;
} );