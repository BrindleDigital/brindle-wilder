<?php


if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', time() );
}



/**
 * ACF SAVE AND LOAD JSON
 */
include "inc/acf-json.php";

/**
 * ACF FUNCTIONS/DECLARATIONS
 */
include "inc/acf-functions.php";

/**
 * ACF CONTENT HELPERS
 */
include "inc/acf-content-helpers.php";

/**
 * SVG SUPPORT FOR MEDIA
 */
include "inc/svg-support.php";

/**
 * SVG SUPPORT FOR MEDIA
 */
include "inc/theme-options-styling.php";

/**
 * DISABLE ADMIN BAR
 */
include "inc/disable-admin-bar.php";

/**
 * DISABLE ADMIN BAR
 */
include "inc/regular-content-helpers.php";

/**
 * DISABLE ADMIN BAR
 */
include "inc/additional-scripts.php";

/**
 * Implement the Custom Header feature.
 */
require "inc/custom-header.php";

/**
 * Custom template tags for this theme.
 */
require "inc/template-tags.php";

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require "inc/template-functions.php";

/**
 * Customizer additions.
 */
require "inc/customizer.php";

/**
 * Shortcodes.
 */
require "inc/shortcodes.php";




/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function theme_test_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on theme-test, use a find and replace
		* to change 'theme-test' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'theme-test', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.

	register_nav_menus(
		array(
			'primary_menu' => esc_html__( 'Main Menu', 'brindle' ),
			'footer_menu' => esc_html__( 'Footer Menu', 'brindle' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'theme_test_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'theme_test_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theme_test_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'theme_test_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme_test_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_test_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'theme-test' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'theme-test' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'theme_test_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function theme_test_scripts() {


	wp_enqueue_style( 'theme-test-style', get_template_directory_uri(), array(), _S_VERSION );
	wp_style_add_data( 'theme-test-style', 'rtl', 'replace' );
	

	// THEME CUSTOM DESIGN
	wp_enqueue_style('brindle', get_template_directory_uri() . '/dist/css/style.css', array(), _S_VERSION);
	wp_enqueue_script('brindle', get_template_directory_uri() . '/dist/js/app.js', array(), _S_VERSION);

	wp_enqueue_style('brindle-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), _S_VERSION);

	// FONTS
	wp_enqueue_style('brindle-fonts', 'https://use.typekit.net/gcm4qhd.css', array(), _S_VERSION);
	wp_enqueue_style('brindle-fonts-sawoodlandshills', get_template_directory_uri() . '/assets/fonts/sawoodlandhills/stylesheet.css', array(), _S_VERSION);



}
add_action( 'wp_enqueue_scripts', 'theme_test_scripts' );


function my_plugin_body_class($classes) {

	$page_settings = get_page_settings();

	if( $page_settings['header']['show_navigation_as_transparent'] ){
		$classes[] = 'transparent-navbar';
	}

    return $classes;
}

add_filter('body_class', 'my_plugin_body_class');


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

