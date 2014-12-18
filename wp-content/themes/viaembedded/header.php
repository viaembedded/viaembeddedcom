<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package VIA Embedded
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
<div id="banner-row" class="full">
  <header class="main">
    <div class="banner-section" id="banner-left">
      <img src="<?php echo get_template_directory_uri(); ?>/images/header-left.png" width="149" heoght="98">
    </div><!-- #banner-left -->

    <div class="banner-section" id="banner-right">
      <img src="<?php echo get_template_directory_uri(); ?>/images/header-right.png" width="56" height="98">
    </div><!-- #banner-right -->

    <div class="banner-section" id="banner-center">
      <div id="banner-logo-outer">
	<img src="<?php echo get_template_directory_uri(); ?>/images/viaembedded-small.png" id="banner-logo">
      </div>

      <nav id="site-navigation" class="main-navigation" role="navigation">
	<h1 class="menu-toggle"><?php _e( 'Menu', 'fwu' ); ?></h1>
	<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'fwu' ); ?>"><?php _e( 'Skip to content', 'fwu' ); ?></a></div>
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      </nav><!-- #site-navigation -->
    </div><!-- #banner-center -->
  </header><!-- .main -->
</div><!-- #banner-row -->

<div id="header-row" class="full">
	<div class="main">
		<?php do_action( 'before' ); ?>
		<header id="masthead" class="inner">
                       <?php if ( function_exists('yoast_breadcrumb') ) {
                          yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                       } ?>
		</header><!-- #masthead -->
	</div><!-- .main -->
</div><!-- #header-row -->

<div id="content-row" class="full">
	<div class="main">
		<div id="content" class="site-content inner">
