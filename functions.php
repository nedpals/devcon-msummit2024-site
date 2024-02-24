<?php
/**
 * devcon-msummit2024 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package devcon-msummit2024
 */

require_once "vendor/autoload.php";

use Kucrut\Vite;

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function devcon_msummit2024_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on devcon-msummit2024, use a find and replace
		* to change 'devcon-msummit2024' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'devcon-msummit2024', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'devcon-msummit2024' ),
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
			'devcon_msummit2024_custom_background_args',
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
add_action( 'after_setup_theme', 'devcon_msummit2024_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function devcon_msummit2024_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'devcon_msummit2024_content_width', 640 );
}
add_action( 'after_setup_theme', 'devcon_msummit2024_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function devcon_msummit2024_widgets_init() {
//	register_sidebar(
//		array(
//			'name'          => esc_html__( 'Sidebar', 'devcon-msummit2024' ),
//			'id'            => 'sidebar-1',
//			'description'   => esc_html__( 'Add widgets here.', 'devcon-msummit2024' ),
//			'before_widget' => '<section id="%1$s" class="widget %2$s">',
//			'after_widget'  => '</section>',
//			'before_title'  => '<h2 class="widget-title">',
//			'after_title'   => '</h2>',
//		)
//	);
}
add_action( 'widgets_init', 'devcon_msummit2024_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function devcon_msummit2024_scripts() {
    Vite\enqueue_asset(
        __DIR__ . '/resources/dist',
        '/resources/js/main.ts',
        array(
            'handle' => '_devcon_main_app',
        )
    );

	wp_enqueue_style( 'devcon-msummit2024-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'devcon-msummit2024-style', 'rtl', 'replace' );

	wp_enqueue_script( 'devcon-msummit2024-navigation', get_template_directory_uri() . '/resources/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'devcon_msummit2024_scripts' );

/**
 * Load default theme font from Google fonts
 */
function devcon_msummit2024_load_fonts() {
    $fontFamilies = ['Archivo:wght@100;200;300;400;500', 'Sora:wght@300;400;600;700;800'];
    $familiesParameters = implode('&', array_map(fn ($f) => 'family='.$f, $fontFamilies));

    echo implode("\n", [
        '<link rel="preconnect" href="https://fonts.googleapis.com">',
        '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>',
        '<link href="https://fonts.googleapis.com/css2?'.$familiesParameters.'&display=swap" rel="stylesheet">'
    ]);
}
add_action('wp_head', 'devcon_msummit2024_load_fonts', 10);

/**
 * Disable WP admin bar
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

