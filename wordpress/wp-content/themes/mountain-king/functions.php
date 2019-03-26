<?php
/**
 * Mountain King functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mountain_King
 */

if ( ! function_exists( 'mountain_king_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mountain_king_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Mountain King, use a find and replace
		 * to change 'mountain-king' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mountain-king', get_template_directory() . '/languages' );

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
		register_nav_menu('top', 'Меню в шапке');
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'mountain_king_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'mountain_king_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mountain_king_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mountain_king_content_width', 640 );
}
add_action( 'after_setup_theme', 'mountain_king_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mountain_king_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mountain-king' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mountain-king' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mountain_king_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mountain_king_scripts() {
	wp_enqueue_style( 'mountain-king-style', get_stylesheet_uri());
	// wp_enqueue_style( 'pushy', get_template_directory_uri() . '/assets/css/pushy.css' );
	wp_enqueue_style( 'fonts', get_template_directory_uri() . 'http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700' );
	wp_enqueue_style( 'simple', get_template_directory_uri() . '/assets/vendor/simple-line-icons/css/simple-line-icons.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . 'assets/css/animate.css' );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/vendor/swiper/css/swiper.min.css' );
	wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.min.css' );
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/favicon.ico' );





	wp_enqueue_script( 'mountain-king-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mountain-king-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mountain_king_scripts' );
add_action('wp_footer', 'scripts_theme');

function scripts_theme() {
	wp_enqueue_scripts('jquery', get_template_directory_uri() . '/assets/vendor/jquery.min.js');
	wp_enqueue_scripts('migrate', get_template_directory_uri() . '/assets/vendor/jquery-migrate.min.js');
	wp_enqueue_scripts('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js');
	wp_enqueue_scripts('easing', get_template_directory_uri() . '/assets/vendor/jquery.easing.js');
	wp_enqueue_scripts('back-to-top', get_template_directory_uri() . '/assets/vendor/jquery.back-to-top.js');
	wp_enqueue_scripts('smooth-scroll', get_template_directory_uri() . '/assets/vendor/jquery.smooth-scroll.js');
	wp_enqueue_scripts('wow', get_template_directory_uri() . '/assets/vendor/jquery.wow.min.js');
	wp_enqueue_scripts('parallax', get_template_directory_uri() . '/assets/vendor/jquery.parallax.min.js');
	wp_enqueue_scripts('appear', get_template_directory_uri() . '/assets/vendor/jquery.appear.js');
	wp_enqueue_scripts('swiper', get_template_directory_uri() . '/assets/vendor/swiper/js/swiper.jquery.min.js');
	wp_enqueue_scripts('layout', get_template_directory_uri() . '/assets/js/layout.min.js');
	wp_enqueue_scripts('progress', get_template_directory_uri() . '/assets/js/components/progress-bar.min.js');
	wp_enqueue_scripts('swiper-min', get_template_directory_uri() . '/assets/js/components/swiper.min.js');
	wp_enqueue_scripts('wow-min', get_template_directory_uri() . '/assets/js/components/wow.min.js');
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

