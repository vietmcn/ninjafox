<?php
/**
 * Diskplay HEader Template For Screen Large
 * @since 1.0
 * @author ninja 
 */

if ( !defined('ABSPATH') ) {
    exit;
}
/**
 * List Hook Template
 * @link {https://codex.wordpress.org/Plugin_API/Hooks}
 * @since 1.0 
 * @author ninja
 */
add_action ( 'ninja_header', '' );

add_action( 'ninja_header', function() {
    ?>
        Hello Desktop
    <?php 
} );