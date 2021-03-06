<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up to <div id="content">
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main-page">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="page-header" role="banner">
		<div class="page-header__branding">
			<h1 class="page-header__branding-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p class="page-header__branding-description"><?php bloginfo( 'description' ); ?></p>
		</div>

        <button class="page-header__nav-trigger" id="nav-trigger"><?php _e( 'Menu', '_s' ); ?></button>

		<nav id="site-navigation" class="page-header__nav" role="navigation">
			<a class="screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'page-header__nav-group', 'walker' => new _s_walker_header_nav_menu ) ); ?>
		</nav>
	</header>

	<div id="content" class="content  page-content">
