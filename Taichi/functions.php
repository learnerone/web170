<?php

//for security, hide wp version in web pages and feeds
function remove_version_info() {
     return '';
}
add_filter('the_generator', 'remove_version_info');

//SEO title
add_theme_support( 'title-tag' );

// use shortcodes in widgets
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

//Register custom menus
function register_my_menus() {
  register_nav_menus(
    array( 
		  'main-menu' => __( 'Main Menu' ) 
		  )
  );
  
  add_action( 'init', 'register_my_menus' );

}

function title_tag(){
	if (is_front_page()){
		bloginfo('description');
		
	}else{
		wp_title('');	
	}
	
	echo ' | ';
	bloginfo('name');
}

// Add custom menus to Dashboard when theme is active   
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-menu' => 'Main Menu' 
			 )
	);
}



add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	/* Register the secondary sidebar. */
	register_sidebar(
		array(
			'id' => 'secondary',
			'name' => __( 'Secondary Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	 
	
	
	/* Repeat register_sidebar() code for additional sidebars. */
}

/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function wpcodex_add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_pages' );

/*enabling featured thumbnail */
add_theme_support( 'post-thumbnails' );

// Remove rel attribute from the category list
function remove_category_list_rel($output)
{
  $output = str_replace(' rel="category tag"', '', $output);
  return $output;
}
add_filter('wp_list_categories', 'remove_category_list_rel');
add_filter('the_category', 'remove_category_list_rel');



/**
 * Enqueue scripts and styles.
 */
//function slasse_scripts() {
//	wp_enqueue_style( 'Taichi-style', get_stylesheet_uri() );
//	
//	wp_enqueue_style( 'Taichi-blueberry', get_stylesheet_uri() );
//	
//	wp_enqueue_style( 'Taichi-lightbox', get_stylesheet_uri() );
	
//	if (is_page_template('page-templates/page-nosidebar.php')) {
//		wp_enqueue_style( 'Taichi-layout-style' , get_template_directory_uri() . '/layouts/no-sidebar.css');
//	} else {
//		wp_enqueue_style( 'Taichi-layout-style' , get_template_directory_uri() . '/layouts/content-sidebar.css');
//	}
	
//	wp_enqueue_style ('Taichi-google-fonts', 'http://fonts.googleapis.com/css?family=Lato:100,400,900,400italic,900italic|PT+Serif:400,700,400italic,700italic');
//	
//	
//	wp_enqueue_style('Taichi_fontawesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
//
//	wp_enqueue_script( 'Taichi-superfish', get_template_directory_uri() . '/js/jquery.blueberry.js', array('jquery'), '20150104', true );
//	
//	wp_enqueue_script( 'Taichi-hide-search', get_template_directory_uri() . '/js/lightbox.js', array(), '20150104', true );
//	
//	function mytheme_enqueue_styles() {wp_register_style('googleFonts', '//fonts.googleapis.com/css?family=Copse');wp_enqueue_style( 'googleFonts');}
	
//	wp_enqueue_script( 'taichi-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('slasse-superfish'), '20150104', true );
//	
//	wp_enqueue_script( 'taichi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
//
//	wp_enqueue_script( 'slasse-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20150104', true );
//	
//	wp_enqueue_script( 'slasse-masonry', get_template_directory_uri() . '/js/masonry-settings.js', array('masonry'), '20150104', true );

//	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//		wp_enqueue_script( 'comment-reply' );
//	}
//}
//add_action( 'wp_enqueue_scripts', 'Taichi_scripts' );