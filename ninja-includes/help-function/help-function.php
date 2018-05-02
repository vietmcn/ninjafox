<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
/**
 * Crate function import view
 *
 * @since 1.0
 */
if ( ! function_exists( 'import' ) ) {
    function import_view( $folder = NULL, $name = NULL ) {
        $inc = 'ninja-includes';
		require_once ( N_EXTEND_FOLDER .'/'.$inc.'/'.$folder.'/view-'.$name.'.php' );
    }
}
/**
 * Crate function import_template
 *
 * @since 1.0
 */
function import_template( $name ) {

}