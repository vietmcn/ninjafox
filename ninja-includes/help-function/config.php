<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
/**
 * Hook Template
 * 
 * @since 1.0
 * 
 */
require_once 'hook/remove-hook.php';
require_once 'hook/add-hook.php';
/**
 * Import Template
 * Desktop+
 * Mobile+
 * @since 1.0
 * 
 */
global $ninja_mobile;

if ( $ninja_mobile->isMobile() ) {

} else {
    require_once 'template/screen-large/header.php';
}
