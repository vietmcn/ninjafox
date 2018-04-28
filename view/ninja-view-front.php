<?php 
if ( defined( 'ABSPATH' ) ) {
    exit;
}
if ( class_exists( 'Ninja_View_Front' ) ) {
    class Ninja_View_Front extends Ninja_View
    {
        public function logo( $att ) 
        {
            $out = '<';
        }
    }
    
}