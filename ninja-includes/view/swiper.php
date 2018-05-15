<?php 
/**
 * Template Slider 
 * @since 1.0
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
if ( !class_exists('Ninja_View_Slider') ) {
    class Ninja_View_Slider
    {
        protected $att = array();

        public function basic( $att )
        {
            $out  = '<div class="swiper-container">';
            $out .= 'hello world';
            $out .= '</div>';
            if ( isset( $att['echo'] ) == true ) {
                echo $out;
            } else {
                return $out;
            }
        }
    }
}