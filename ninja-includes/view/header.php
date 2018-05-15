<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
if ( ! class_exists( 'Ninja_View_Front' ) ) {
    class Ninja_View_Front
    {
        protected $att = array();

        public function logo( $att ) 
        {
            if ( is_home() || is_front_page() ) {
                $h = 'h1';
            } else {
                $h = 'div';
            }
            $out  = '<'.$h.' id="ninja-class-head" class="">';
            $out .= '<a href="'.$att['url'].'" title="'.$att['title'].'">';
            if ( isset( $att['logo_img'] ) ) {
                $out .= '<img src="'.$att['logo_img'].'" alt="'.$att['title'].'"/>';
            } else {
                $out .= $att['logo'];
            }
            $out .= '</a>';
            $out .= '</'.$h.'>';
            echo $out;
        }
        public function menu( $att )
        {
            wp_nav_menu( array(
                'menu'           => $att['menu'],
                'echo'           => ( isset( $att['echo'] ) ) ? $att['echo'] : true,
                'fallback_cb'    => false, // Do not fall back to wp_page_menu()
                'theme_location' => $att['them_localtion'],
            ) );
        }
        public function search()
        {
            $out  = '<div id="ninja-search" class="col-2">';
            $out .= '<gcse:searchbox-only></gcse:searchbox-only>';
            $out .= '</div>';
            echo $out;
        }
    }
}