<?php
/**
 * VIA Embedded functions and definitions
 *
 * @package VIA Embedded
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'viaembedded_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function viaembedded_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on VIA Embedded, use a find and replace
	 * to change 'viaembedded' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'viaembedded', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'slideshow', 400, 275, true );
	add_image_size( 'frontpage', 450, 150, true );
	set_post_thumbnail_size( 400, 275, true ); // 400 pixels wide by 275 pixels tall, crop mode

	/* Add a maximum of 5 additional images. */
	if (class_exists('MultiPostThumbnails')) {
	  for($i=1; $i<5; $i++) {
	    new MultiPostThumbnails(
				    array(
					  'label' => 'Additional Image #'.$i,
					  'id' => 'additional-image-'.$i,
					  'post_type' => 'page'
					  )
				    );
	  }
	}

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'viaembedded' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'viaembedded_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_theme_support( 'title-tag' );

	// Add search form support, see http://codex.wordpress.org/Function_Reference/get_search_form
	add_theme_support( 'html5', array( 'search-form' ) );

	// Editor style, http://codex.wordpress.org/Function_Reference/add_editor_style
	add_editor_style( 'custom-editor-style.css' );
}
endif; // viaembedded_setup
add_action( 'after_setup_theme', 'viaembedded_setup' );

/**
 * Add featured image related class to pages
 *
 */
function page_header_image_class( $classes ) {
	global $post;
	$post_id = $post->ID;

	if ( has_post_thumbnail( $post_id ) ) {
	   $classes[] = "has-featured-image";
	} else {
	   $classes[] = "no-featured-image";
	}
	return $classes;
}
add_filter( 'post_class', 'page_header_image_class' );


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function viaembedded_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'viaembedded' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'viaembedded_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function viaembedded_scripts() {
	wp_enqueue_style( 'viaembedded-style', get_stylesheet_uri(), false, filemtime( get_stylesheet_directory() . '/style.css') );

	// wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
	wp_enqueue_style( 'viaembedded-tabby-mod', get_template_directory_uri() . '/tabby-mod.css', array('tabby.css') );

	/* wp_enqueue_script( 'viaembedded-jquery', get_template_directory_uri() . '/js/lib/jquery.min.js', array(), null, true ); */

	wp_register_script( 'viaembedded-jquery-slides', get_template_directory_uri() . '/js/lib/jquery.slides.min.js', array('jquery'), null, true );
	wp_register_script( 'viaembedded-jquery-serialize', get_template_directory_uri() . '/js/lib/jquery.serialize-object.js', array('jquery'), null, true );

	wp_register_script('jquery-ui', get_template_directory_uri() . '/js/lib/jquery-ui.min.js', array('jquery'), null);
	wp_enqueue_script('jquery-ui');

	wp_register_script('ui-accordion', get_template_directory_uri() . '/js/ui-accordion.js', array('jquery-ui'), null);
	wp_enqueue_script('ui-accordion');

	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/jquery-ui.min.css', array() );

	wp_enqueue_script( 'viaembedded-slider', get_template_directory_uri() . '/js/slider.js', array('viaembedded-jquery-slides'), null, true );
	wp_enqueue_script( 'viaembedded-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'viaembedded-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'viaembedded_scripts' );

// External plugin
function my_mce_external_plugins($plugins) {
    $plugins['anchor'] = get_template_directory_uri() . '/js/tinymce/plugins/anchor/plugin.min.js';
    return $plugins;
}
add_filter('mce_external_plugins', 'my_mce_external_plugins');

// Enable hidden buttons in the editor
// based on: http://wptavern.com/how-to-add-subscript-and-superscript-characters-in-wordpress
// also https://wordpress.org/support/topic/anchor-button
function enable_more_buttons($buttons) {
	/**
	 * Add in core buttons that are disabled by default
	 */
	$buttons[] = 'superscript';
	$buttons[] = 'subscript';
	$buttons[] = 'anchor';

	return $buttons;
}
add_filter('mce_buttons_2', 'enable_more_buttons');

// Add lincense shortcode
function license_shortcode() {
	 $language = pll_current_language('slug');
	 $license_page_id = 3539;
	 $tr_id = pll_get_post($license_page_id, $language);
	 $link_text = '<span class="license"><span id="license-header">Important</span>: By downloading these software packages, you indicate your acceptance of the <a href="' . get_page_link($tr_id) . '">VIA Software License agreement</a>. If you do not agree with any of the terms and conditions, do not continue to download the software.</span>';
	 return $link_text;
}
add_shortcode('license', 'license_shortcode');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
