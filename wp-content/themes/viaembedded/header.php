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
<?php if ( ! function_exists( '_wp_render_title_tag' ) ) :
    function theme_slug_render_title() {
?><title><?php wp_title( '|', true, 'right' ); ?></title><?php
    }
    add_action( 'wp_head', 'theme_slug_render_title' );
endif;?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/lib/html5shiv.js"></script>
<![endif]-->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="banner-row" class="full">
  <header class="main">
    <div class="banner-section" id="banner-center">
      <div id="banner-logo-outer">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" alt="Home">
	  <img src="<?php echo get_template_directory_uri(); ?>/images/VIA_Embedded_Logo.png" id="banner-logo">
	</a>
      </div>
    </div><!-- #banner-center -->
  </header><!-- .main -->
</div><!-- #banner-row -->

<div id="header-row" class="full">
	<div class="main">
	  <div id="site-navigation-outer">
	    <nav id="site-navigation" class="main-navigation" role="navigation">
	      <h1 class="menu-toggle"><?php _e( 'Menu', 'fwu' ); ?></h1>
	      <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'fwu' ); ?>"><?php _e( 'Skip to content', 'fwu' ); ?></a></div>
<?php
if( function_exists( 'uberMenu_direct' ) ){
  uberMenu_direct( 'primary' );
}
?>
	    </nav><!-- #site-navigation -->
	  </div><!-- #site-navigation-outer -->
	  <?php do_action( 'before' ); ?>
	  <header id="masthead" class="inner clearfix">
            <?php if ( function_exists('yoast_breadcrumb') ) {
			echo "<div id=\"breadcrumbs-outer\">";
			  yoast_breadcrumb('<p id="breadcrumbs">','</p>');
			echo "</div>";
		} ?>
	    <div id="search-outer">
	    <?php get_search_form(); ?>
	    </div>
	    <div id="language-switcher">
	       <ul><?php pll_the_languages(array('show_flags'=>1,'show_names'=>0));?></ul>
	    </div>
	   </header><!-- #masthead -->
	</div><!-- .main -->
</div><!-- #header-row -->

<div id="content-row" class="full">
	<div class="main">
		<div id="content" class="site-content inner">
