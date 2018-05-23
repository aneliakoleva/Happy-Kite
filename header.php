<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hpy
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div id="masthead" class="site-header" role="banner">
		<div class="container">
			<header class="header-wrap">
				<img src="<?php echo IMAGES; ?>logomark.svg" alt="HappyKite Logo">
				<div class="header-inner">
					<h1><?php _e('Happy Technical Test', 'hpy'); ?></h1>
					<p><?php _e('A WordPress test to assess skill-level', 'hpy'); ?></p>
				</div>
			</header>
		</div>
	</div>

	<main id="content" class="site-content">
