<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Namespaced
 * @since Namespaced 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/global.css" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<!-- Header -->
	<header>
		<section class="row">
		    <nav class="col twelve">
				<?php wp_nav_menu(array(
					'theme_location'	=> 'header-bar',
					'items_wrap'      	=> '<ul class="cf">%3$s</ul>',
					'container'			=> false
				)); ?>
		    </nav>
		</section>

		<section class="row">
			<nav class="col twelve">
				<?php wp_nav_menu(array(
					'theme_location'	=> 'header-nav',
					'items_wrap'      	=> '<ul class="cf">%3$s</ul>',
					'container'			=> false
				)); ?>
			</nav>
		</section>
	</header>

