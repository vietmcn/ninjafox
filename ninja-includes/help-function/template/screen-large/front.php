<?php 
/**
 * Template Index/Front/Page
 * Learn more: {@link }
 * @since 1.0
 * 
 */
if ( !defined('ABSPATH') ) {
    exit;
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