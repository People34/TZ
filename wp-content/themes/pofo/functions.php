<?php
/**
 * pofo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pofo
 */

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
function pofo_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on pofo, use a find and replace
		* to change 'pofo' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'pofo', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'pofo' ),
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
			'pofo_custom_background_args',
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
add_action( 'after_setup_theme', 'pofo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pofo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pofo_content_width', 640 );
}
add_action( 'after_setup_theme', 'pofo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pofo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pofo' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'pofo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'pofo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pofo_scripts() {
	wp_enqueue_style( 'pofo-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style( 'pofo-themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css', array(), _S_VERSION );
	wp_enqueue_style( 'pofo-swiper.min', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), 4.5 );
	wp_enqueue_style( 'pofo-main-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'pofo-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION );
	wp_enqueue_style( 'pofo-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), 1.1 );
	wp_enqueue_style( 'pofo-justified-gallery.min', get_template_directory_uri() . '/assets/css/justified-gallery.min.css', array(), 3.7 );
	wp_enqueue_style( 'pofo-font-awesome.min', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), 5.8 );
	wp_enqueue_style( 'pofo-et-line-icons', get_template_directory_uri() . '/assets/css/et-line-icons.css', array(), _S_VERSION );
	wp_enqueue_style( 'pofo-bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 4.3 );
	wp_enqueue_style( 'pofo-bootsnav', get_template_directory_uri() . '/assets/css/bootsnav.css', array(), 1.2 );
	wp_enqueue_style( 'pofo-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), 3.7 );

	wp_enqueue_script( 'pofo-wow.min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), 1.3, true );
	wp_enqueue_script( 'pofo-swiper.min', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), 3.0, true );
	wp_enqueue_script( 'Smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', array(), 2.2, true );
	wp_enqueue_script( 'pofo-skrollr.min', get_template_directory_uri() . '/assets/js/skrollr.min.js', array(), 0.6, true );
	wp_enqueue_script( 'pofo-skill.bars.jquery', get_template_directory_uri() . '/assets/js/skill.bars.jquery.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pofo-revolution.extension.video.min', get_template_directory_uri() . '/assets/js/revolution.extension.video.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pofo-revolution.extension.slideanims.min', get_template_directory_uri() . '/assets/js/revolution.extension.slideanims.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pofo-revolution.extension.parallax.min', get_template_directory_uri() . '/assets/js/revolution.extension.parallax.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pofo-revolution.extension.navigation.min', get_template_directory_uri() . '/assets/js/revolution.extension.navigation.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pofo-revolution.extension.migration.min', get_template_directory_uri() . '/assets/js/revolution.extension.migration.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pofo-revolution.extension.layeranimation.min', get_template_directory_uri() . '/assets/js/revolution.extension.layeranimation.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pofo-revolution.extension.kenburn.min', get_template_directory_uri() . '/assets/js/revolution.extension.kenburn.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pofo-revolution.extension.carousel.min', get_template_directory_uri() . '/assets/js/revolution.extension.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pofo-revolution.extension.actions.min', get_template_directory_uri() . '/assets/js/revolution.extension.actions.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pofo-retina.min', get_template_directory_uri() . '/assets/js/retina.min.js', array(), 3, true );
	wp_enqueue_script( 'pofo-page-scroll', get_template_directory_uri() . '/assets/js/page-scroll.js', array(), 1.4, true );
	wp_enqueue_script( 'pofo-modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array(), 2.7, true );
	wp_enqueue_script( 'pofo-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pofo-justified-gallery.min', get_template_directory_uri() . '/assets/js/justified-gallery.min.js', array(), 3.7, true );
	wp_enqueue_script( 'pofo-jquery.themepunch.tools.min', get_template_directory_uri() . '/assets/js/jquery.themepunch.tools.min.js', array(), 1.6, true );
	wp_enqueue_script( 'pofo-jquery.themepunch.revolution.min', get_template_directory_uri() . '/assets/js/jquery.themepunch.revolution.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pofo-jquery.stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.js', array(), 0.6, true );
	wp_enqueue_script( 'pofo-jquery.nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array(), 3, true );
	wp_enqueue_script( 'pofo-jquery.magnific-popup.min', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), 1.1, true );
	wp_enqueue_script( 'pofo-jquery.fitvids', get_template_directory_uri() . '/assets/js/jquery.fitvids.js', array(), 1.1, true );
	wp_enqueue_script( 'pofo-jquery.easypiechart.min', get_template_directory_uri() . '/assets/js/jquery.easypiechart.min.js', array(), 2.1, true );
	wp_enqueue_script( 'pofo-jquery.easing.1.3', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array(), 1.3, true );
	wp_enqueue_script( 'pofo-jquery.count-to', get_template_directory_uri() . '/assets/js/jquery.count-to.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pofo-jquery.appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array(), 0.4, true );
    wp_enqueue_script( 'pofo-jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), 1.12, true );
	wp_enqueue_script( 'pofo-isotope.pkgd.min', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), 3.0, true );
	wp_enqueue_script( 'pofo-instafeed.min', get_template_directory_uri() . '/assets/js/instafeed.min.js', array(), 1.9, true );
	wp_enqueue_script( 'pofo-imagesloaded.pkgd.min', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), 4.1, true );
	wp_enqueue_script( 'pofo-html5shiv', get_template_directory_uri() . '/assets/js/html5shiv.js', array(), 3.7, false );
	wp_enqueue_script( 'pofo-hamburger-menu', get_template_directory_uri() . '/assets/js/hamburger-menu.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pofo-counter', get_template_directory_uri() . '/assets/js/counter.js', array(), 2.0, true );
	wp_enqueue_script( 'pofo-classie', get_template_directory_uri() . '/assets/js/classie.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pofo-bootstrap.bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array(), 4.3, true );
	wp_enqueue_script( 'pofo-bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js', array(), 1.2, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pofo_scripts' );

/**
 * Implement the Custom Header feature.
 */


/**
 * Load Jetpack compatibility file.
 */


