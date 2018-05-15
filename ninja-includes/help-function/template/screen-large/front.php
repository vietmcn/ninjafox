<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
/**
 * Display Show Front Template
 * @since 1.0
 * @author ninja
 */
add_action( 'ninja_front', function() {
    /**
     * Display View Slider
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