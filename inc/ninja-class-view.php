<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
if ( ! class_exists( 'Ninja_View' ) ) {
    class Ninja_View
    {
        protected $att = array();
    }
}
return new Ninja_View;