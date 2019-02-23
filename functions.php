<?php
/**
 * global functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package global
 */

if ( ! function_exists( 'global_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function global_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on global, use a find and replace
		 * to change 'global' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'global', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'global' ),
		) );

		register_nav_menus( array(
			'Main-menu' => esc_html__( 'Main-menu', 'global' ),
		) );


		register_post_type('service-post',array(
			$global =  array(
				'name'	=> 'service-post',
				'singular_name'	=> 'fornt page service',
				'add_new'	=> 'add page service',
				'add_new_item'	=> 'add new service',
				'view_item'	=> 'view service',
			),
			'public' => true,
			'labels'	=>	$global,
			'menu_icon' => 'dashicons-welcome-learn-more',
			'supports'           => array( 'title','editor', 'custom-fields','thumbnail', 'comments')
		));

			
		register_post_type('Agencies-post',array(
			$Agencies =  array(
				'name'	=> 'Agencies-post',
				'singular_name'	=> 'fornt page Agencies',
				'add_new'	=> 'add page Agencies',
				'add_new_item'	=> 'add new Agencies',
				'view_item'	=> 'view Agencies',
			),
			'public' => true,
			'labels'	=>	$Agencies,
			'menu_icon' => 'dashicons-welcome-learn-more',
			'supports'           => array( 'title','editor', 'custom-fields','thumbnail', 'comments')
		));	








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
		add_theme_support( 'custom-background', apply_filters( 'global_custom_background_args', array(
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
add_action( 'after_setup_theme', 'global_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function global_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'global_content_width', 640 );
}
add_action( 'after_setup_theme', 'global_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function global_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'global' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'global' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'global_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function global_scripts() {

	wp_enqueue_style( 'global-fontawesome','https://use.fontawesome.com/releases/v5.6.3/css/all.css');
	wp_enqueue_style( 'global-googlefont','https://fonts.googleapis.com/css?family=Roboto:400,500,700');
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/inc/bootstrap.min.css' );
	wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/inc/magnific-popup.css' );
	wp_enqueue_style( 'lightslider-style', get_template_directory_uri() . '/inc/lightslider.css' );
	wp_enqueue_style( 'fair-main-stylesheet', get_template_directory_uri() . '/inc/custom.css' );
	wp_enqueue_style( 'global-style', get_stylesheet_uri() );

	wp_enqueue_script( 'global-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'magnific-popup-js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'),1.0, true );
	wp_enqueue_script( 'lightslider-js', get_template_directory_uri() . '/js/lightslider.js', array('jquery'),1.0, true );
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'),1.0, true );
	wp_enqueue_script( 'global-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() .'/js/custom.js', array('jquery'),1.0, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'global_scripts' );

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
 * Redux Framework 
 */
require get_template_directory() . '/redux/ReduxCore/framework.php';

require get_template_directory() . '/redux/sample/sample-config.php';

require get_template_directory() . '/cmb2/cmb2.php';




/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

