<?php
/**
 * The template for displaying the header
 *
 * 
 *
 * @package 
 * @subpackage 
 * @since 
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body id="ninja-main">
<header id="ninja-header" class="setup ninja-head-style">
<?php 
/**
 * Header hook
 * Name: 
 * Ninja Menu
 * Ninja Logo
 * 
 */
do_action('ninja_header'); ?>
</header>
<main id="ninja-front" class="ninja-content setup">