<?php 
/**
 * template\footer
 * @link {https://codex.wordpress.org/Templates} 
 * @since 1.0
 * @author ninja
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * Control Hook
 * @link {https://codex.wordpress.org/Plugin_API/Hooks}
 * @hook before_footer
 * @hook after_footer
 * @since 1.0   
 * @author ninja
 */
add_action( 'ninja_footer', 'before_footer', 5 );
add_action( 'ninja_footer', 'after_footer', 55 );

if ( !function_exists( 'before_footer' ) ) :
    /**
     * Before Container Footer
     * @since 1.0
     * @author ninja
     */
    function before_footer() {
        echo '<footer id="ninja-footer" class="footer">';
    }
endif;

if ( !function_exists( 'after_footer') ) :
    function after_footer() {
        echo '</footer>';
    }
endif;