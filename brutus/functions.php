<?php
/**
 * brutus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package brutus
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
function brutus_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on brutus, use a find and replace
		* to change 'brutus' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'brutus', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'brutus' ),
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
			'brutus_custom_background_args',
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
add_action( 'after_setup_theme', 'brutus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function brutus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'brutus_content_width', 640 );
}
add_action( 'after_setup_theme', 'brutus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function brutus_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'brutus' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'brutus' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'brutus_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function brutus_scripts() {
	wp_enqueue_style( 'brutus-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'brutus-style', 'rtl', 'replace' );

	wp_enqueue_script( 'brutus-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'span-after-language-nav', get_template_directory_uri() . '/js/span-after-language.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'catalog-filters', get_template_directory_uri() . '/js/catalog-filters.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'hover-artefact', get_template_directory_uri() . '/js/hover-artefact.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'brutus_scripts' );

function add_custom_styles() {
	wp_enqueue_style( 'brutus-custom-header-style', get_template_directory_uri() . '/css/header.css' );
	wp_enqueue_style( 'brutus-custom-footer-style', get_template_directory_uri() . '/css/footer.css' );
	wp_enqueue_style( 'brutus-custom-front-page-style', get_template_directory_uri() . '/css/front-page.css' );
	wp_enqueue_style( 'brutus-custom-catalog-style', get_template_directory_uri() . '/css/page-katalogos.css' );
	wp_enqueue_style( 'brutus-custom-single-artefact-post-style', get_template_directory_uri() . '/css/single-artefacts.css' );
	wp_enqueue_style( 'brutus-404-style', get_template_directory_uri() . '/css/404.css' );
	wp_enqueue_style( 'brutus-about-page-style', get_template_directory_uri() . '/css/page-sxetika.css' );
}
add_action( 'wp_enqueue_scripts', add_custom_styles );

/**
 * Each page appears twice, once for each language (Greek and English).
 * We will be creating a single template (targeting greek) for each set of pages in which
 * we will be adding the correct gettext functions to provide a translation via .mo/.po
 * 
 * Then, set_custom_templates() will set this template on the other version of the page.
 * This way we don't have to create two separate templates reducing repeated code.
 */
function set_custom_templates() {
	$catalog_english_page_id = 561;
	$about_english_page_id = 573;
	update_post_meta( $catalog_english_page_id, '_wp_page_template', 'page-katalogos.php' );
	update_post_meta( $about_english_page_id, '_wp_page_template', 'page-sxetika.php' );
}
add_action( 'init', set_custom_templates );

/**
 * Create a custom post type for artefacts.
 */
function artefact_post_type() {

	// Features this custom post type supports in Post Editor
	$supports = array(
		'title',			// Post title
		'editor',			// Post editor
		'author',			// Post author
		'thumbnail',		// Featured image
		'excerpt',			// Post excerpt 
		'custom-fields',	// Custom fields
		'revisions',		// Post revisions
	);

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'				=> _x( 'Artefacts', 'Post type general name', 'brutus' ),
		'singular_name'		=> _x( 'Artefact', 'Post type singular name', 'brutus' ),
		'menu_name'			=> __( 'Artefacts', 'brutus' ),
		'name_admin_bar'	=> __( 'Artefacts', 'brutus' ),
		'add_new'			=> __( 'Add New', 'brutus' ),
		'add_new_item'		=> __( 'Add New Artefact', 'brutus' ),
		'edit_item'			=> __( 'Edit Artefact', 'brutus' ),
		'update_item'		=> __( 'Update Artefact', 'brutus' ),
		'view_item'			=> __( 'View Artefact', 'brutus' ),
		'all_items'			=> __( 'All Artefacts', 'brutus' ),
		'search_items'		=> __( 'Search Artefacts', 'brutus' ),
		'not_found'			=> __( 'No artefacts found', 'brutus' ),
	);

	$args = array(
		'label'					=> __( 'artefacts', 'brutus' ),
		'labels'				=> $labels,
		'description'			=> __( 'Artefacts of Region of Epirus', 'brutus' ),
		'supports'				=> $supports,
		'public'				=> true,
		'show_ui'				=> true,
		// 'show_in_menu'			=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'		=> true,
		// 'menu_position'			=> 5,
		'can_export'			=> true,
		'has_archive'			=> true,
		'publicly_queryable'	=> true,
		'capability_type'		=> 'post',
		'rewrite'				=> array( 'slug' => 'artefacts' ),
		'show_in_rest'			=> true,
		'exclude_from_search'	=> false,
		/**
		 * A hierarchical Custom Post Type is like Pages and can have Parent and child items.
		 * A non-hierarchical CPT is like Posts.
		 */
		'hierarchical'			=> false,
	);

	// Register Custom Post Type
    register_post_type( 'artefacts', $args );
}
add_action( 'init', 'artefact_post_type', 0 );

/**
 * Create custom 'Origin' non-hierachical (behaves like a tag) taxonomy.
 */
function create_origin_nonhierarchical_taxonomy() {

	// Set UI labels for custom taxonomy
	$labels = array(
		'name'							=> _x( 'Προελεύσεις', 'Taxonomy type general name', 'brutus' ),
		'singular_name'					=> _x( 'Προέλευση', 'Taxonomy type singular name', 'brutus' ),
		'search_items'					=> __( 'Αναζήτηση στις Προελεύσεις', 'brutus' ),
		'popular_items'					=> __( 'Δημοφιλείς Προελεύσεις', 'brutus' ),
		'all_items'						=> __( 'Όλες οι Προελεύσεις', 'brutus' ),
		'parent_item'					=> null,
		'parent_item_colon'				=> null,
		'edit_item'						=> __( 'Επεξεργασία Προέλευσης', 'brutus' ),
		'update_item'					=> __( 'Ενημέρωση Προέλευσης', 'brutus' ),
		'add_new_item'					=> __( 'Προσθήκη Προέλευσης', 'brutus' ),
		'new_item_name'					=> __( 'Όνομα Νέας Προέλευσης', 'brutus' ),
		'separate_items_with_commas'	=> __( 'Διαχωρισμός Προελεύσεων με Κόμμα', 'brutus' ),
		'add_or_remove_items'			=> __( 'Προσθήκη ή Αφαίρεση Προέλευσης', 'brutus' ),	
		'choose_from_most_used'			=> __( 'Επιλογή Μεταξύ των Δημοφιλέστερων Προελεύσεων', 'brutus' ),	
		'menu_name'						=> __( 'Προέλευση', 'brutus' ),
	);

	// Options for custom taxonomy
	$args = array(
		'hierarchical'			=> false,
		'labels'				=> $labels,
		'show_ui'				=> true,
		'show_in_rest'			=> true,
		'show_admin_column'		=> true,
		'update_count_callback'	=> '_update_post_term_count',
		'query_var'				=> true,
		'rewrite'				=> array( 'slug' => 'origin' ),
	);

	register_taxonomy(
		'origin',		// Custom Taxonomy Name
		'artefacts',	// Object types with which the taxonomy should be associated.
		$args,			// Arguments for registering the taxonomy
	);
}
add_action( 'init', 'create_origin_nonhierarchical_taxonomy' );

/**
 * Create custom 'Period' non-hierachical (behaves like a tag) taxonomy.
 */
function create_period_nonhierarchical_taxonomy() {

	// Set UI labels for custom taxonomy
	$labels = array(
		'name'							=> _x( 'Περίοδοι', 'Taxonomy type general name', 'brutus' ),
		'singular_name'					=> _x( 'Περίοδος', 'Taxonomy type singular name', 'brutus' ),
		'search_items'					=> __( 'Αναζήτηση στις Περιόδους', 'brutus' ),
		'popular_items'					=> __( 'Δημοφιλείς Περίοδοι', 'brutus' ),
		'all_items'						=> __( 'Όλες οι Περίοδοι', 'brutus' ),
		'parent_item'					=> null,
		'parent_item_colon'				=> null,
		'edit_item'						=> __( 'Επεξεργασία Περιόδου', 'brutus' ),
		'update_item'					=> __( 'Ενημέρωση Περιόδου', 'brutus' ),
		'add_new_item'					=> __( 'Προσθήκη Περιόδου', 'brutus' ),
		'new_item_name'					=> __( 'Όνομα Νέας Περιόδου', 'brutus' ),
		'separate_items_with_commas'	=> __( 'Διαχωρισμός Περιόδων με Κόμμα', 'brutus' ),
		'add_or_remove_items'			=> __( 'Προσθήκη ή Αφαίρεση Περιόδου', 'brutus' ),	
		'choose_from_most_used'			=> __( 'Επιλογή Μεταξύ των Δημοφιλέστερων Περιόδων', 'brutus' ),	
		'menu_name'						=> __( 'Περίοδος', 'brutus' ),
	);

	// Options for custom taxonomy
	$args = array(
		'hierarchical'			=> false,
		'labels'				=> $labels,
		'show_ui'				=> true,
		'show_in_rest'			=> true,
		'show_admin_column'		=> true,
		'update_count_callback'	=> '_update_post_term_count',
		'query_var'				=> true,
		'rewrite'				=> array( 'slug' => 'period' ),
	);

	register_taxonomy(
		'period',		// Custom Taxonomy Name
		'artefacts',	// Object types with which the taxonomy should be associated.
		$args,			// Arguments for registering the taxonomy
	);
}
add_action( 'init', 'create_period_nonhierarchical_taxonomy' );

/**
 * Create custom 'Material' non-hierachical (behaves like a tag) taxonomy.
 */
function create_material_nonhierarchical_taxonomy() {

	// Set UI labels for custom taxonomy
	$labels = array(
		'name'							=> _x( 'Υλικά', 'Taxonomy type general name', 'brutus' ),
		'singular_name'					=> _x( 'Υλικό', 'Taxonomy type singular name', 'brutus' ),
		'search_items'					=> __( 'Αναζήτηση στα Υλικά', 'brutus' ),
		'popular_items'					=> __( 'Δημοφιλή Υλικά', 'brutus' ),
		'all_items'						=> __( 'Όλα τα Υλικά', 'brutus' ),
		'parent_item'					=> null,
		'parent_item_colon'				=> null,
		'edit_item'						=> __( 'Επεξεργασία Υλικού', 'brutus' ),
		'update_item'					=> __( 'Ενημέρωση Υλικού', 'brutus' ),
		'add_new_item'					=> __( 'Προσθήκη Υλικού', 'brutus' ),
		'new_item_name'					=> __( 'Όνομα Νέου Υλικού', 'brutus' ),
		'separate_items_with_commas'	=> __( 'Διαχωρισμός Υλικών με Κόμμα', 'brutus' ),
		'add_or_remove_items'			=> __( 'Προσθήκη ή Αφαίρεση Υλικού', 'brutus' ),	
		'choose_from_most_used'			=> __( 'Επιλογή Μεταξύ των Δημοφιλέστερων Υλικών', 'brutus' ),	
		'menu_name'						=> __( 'Υλικό', 'brutus' ),
	);

	// Options for custom taxonomy
	$args = array(
		'hierarchical'			=> false,
		'labels'				=> $labels,
		'show_ui'				=> true,
		'show_in_rest'			=> true,
		'show_admin_column'		=> true,
		'update_count_callback'	=> '_update_post_term_count',
		'query_var'				=> true,
		'rewrite'				=> array( 'slug' => 'material' ),
	);

	register_taxonomy(
		'material',		// Custom Taxonomy Name
		'artefacts',	// Object types with which the taxonomy should be associated.
		$args,			// Arguments for registering the taxonomy
	);
}
add_action( 'init', 'create_material_nonhierarchical_taxonomy' );

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

