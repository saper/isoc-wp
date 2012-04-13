<?php
 
/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override twentyten_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 * @uses register_sidebar
 */
 
function isoc_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'twentyten' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'twentyten' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

	// Area 2, located below the Primary Widget Area in the sidebar. Empty by default.
	register_sidebar( array(
		'name' => __( 'Secondary Widget Area', 'twentyten' ),
		'id' => 'secondary-widget-area',
		'description' => __( 'The secondary widget area', 'twentyten' ),
		'before_widget' => '<div id="%1$s" class="socialmedias"><div class="content %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

	// Area 2, located below the Primary Widget Area in the sidebar. Empty by default.
	register_sidebar( array(
		'name' => __( 'Secondary Widget Area 2', 'twentyten' ),
		'id' => 'secondary-widget-area2',
		'description' => __( 'The secondary widget area', 'twentyten' ),
		'before_widget' => '<div id="%1$s"><div class="content %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );
	
	// Area 3, located below the Primary Widget Area in the sidebar. Empty by default.
	register_sidebar( array(
		'name' => __( 'Highlighted Widget Area', 'twentyten' ),
		'id' => 'highlighted-widget-area',
		'description' => __( 'The highlighted widget area', 'twentyten' ),
		'before_widget' => '<div id="%1$s" class="content %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );

	// Footer Widget Area
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'twentyten' ),
		'id' => 'footer-widget-area',
		'description' => __( 'The footer widget area', 'twentyten' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	
	// Homepage Left Widget Area
	register_sidebar( array(
		'name' => __( 'Home Left', 'twentyten' ),
		'id' => 'home_left',
		'description' => __( 'The left home content area', 'twentyten' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );

	

	// Homepage Right Widget Area
	register_sidebar( array(
		'name' => __( 'Home Right Widget Area', 'twentyten' ),
		'id' => 'home_right-widget-area',
		'description' => __( 'The right home widget area', 'twentyten' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );

	// Homepage Slideshow Widget Area
	register_sidebar( array(
		'name' => __( 'Home Slideshow Widget Area', 'twentyten' ),
		'id' => 'slideshow-widget-area',
		'description' => __( 'The slideshow home widget area', 'twentyten' ),
		'before_widget' => '<div class="widget widgettop" id="widget-%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	
	// Homepage Slideshow Widget Area 2
	register_sidebar( array(
		'name' => __( 'Home Slideshow Widget Area2', 'twentyten' ),
		'id' => 'slideshow-widget-area2',
		'description' => __( 'The slideshow home widget area', 'twentyten' ),
		'before_widget' => '<div class="widget widgetmiddle" id="widget-%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );

    // Homepage Slideshow Widget Area 3
	register_sidebar( array(
		'name' => __( 'Home Slideshow Widget Area3', 'twentyten' ),
		'id' => 'slideshow-widget-area3',
		'description' => __( 'The slideshow home widget area', 'twentyten' ),
		'before_widget' => '<div class="widget widgetbottom" id="widget-%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );

}
/** Register sidebars by running twentyten_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'isoc_widgets_init' );

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'twentyten' ),
		'secondary' => __( 'Utility Navigation', 'twentyten' ),
		'footer_menu' => __( 'Footer Menu', 'twentyten' ),
) );

function new_excerpt_more($more) {
       global $post;
	return '  <a href="'. get_permalink($post->ID) . '">Read more...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function add_markup_pages($output) {
    $output= preg_replace('/class="menu-item/', 'class="first-menu-item menu-item', $output, 1);
	$output=substr_replace($output, "last-menu-item menu-item", strripos($output, "menu-item"), strlen("menu-item"));
    return $output;
}
add_filter('wp_nav_menu', 'add_markup_pages');

add_theme_support( 'post-thumbnails', array( 'post' ) );

if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}

include('lib/slides.php');
include('lib/logo.php');

?>