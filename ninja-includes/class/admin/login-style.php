<?php
/**
 * Setup Style Login admin
 * @since 1.0
 */
if ( !defined('ABSPATH') ) {
    exit;
}
if ( $GLOBALS['pagenow'] === 'wp-login.php' && ! empty( $_REQUEST['action'] ) && $_REQUEST['action'] === 'register' ) {
    return;
}
