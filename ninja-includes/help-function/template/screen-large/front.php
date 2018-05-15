<?php 
/**
 * \Swiper\
 * @link
 * @since 1.0
 * @author ninja
 */

if ( !defined('ABSPATH') ) {
    exit;
}
add_action( 'ninja_front', function() {
    /**
     * View Slider
     * Learn more: {@link http://idangero.us/swiper/}
     * @since 0.1
     * @author ninja
     */
    import_view( 'swiper' );

    $ninja_slider = new Ninja_View_Slider;
    
    $out  = '<article id="ninja-slide-front">';
    $out .= $ninja_slider->basic( array(
        'echo' => false,
    ) );
    $out .= 'Hello World';
    $out .= '</aricle>';
    echo $out;
} );