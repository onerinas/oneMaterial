<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package oneMaterial
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/><link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'onematerial' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

		<div class="m-container nav">
			<div class="container">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<a href="#" data-activates="mobile-nav" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
		 
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu side-nav', 'menu_id' => 'mobile-nav','items_wrap' => '<ul id="%1$s" class="%2$s"><li class="mobile-header"><p>Menu</p></li>%3$s</ul><div class="clear"></div>', ) ); ?>
							
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'hide-on-med-and-down' ) ); ?>
		 
				</nav><!-- #site-navigation -->
			<div class="clear"></div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
<div class="container">