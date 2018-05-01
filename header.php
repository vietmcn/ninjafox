<?php
/**
 * The template for displaying the header
 *
 * 
 *
 * @package 
 * @subpackage 
 * @since 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="ninja-vuejs reactjs no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body id="ninja-main">
	<header id="ninja-header" class="setup ninja-head-style w1024">
		<?php 
		/**
		 * Header hook
		 * Name: 
		 * Ninja Menu
		 * Ninja Logo
		 * @since 1.0
		 */
		do_action('ninja_header'); ?>
	</header>
	<main id="ninja-front" class="ninja-content setup">