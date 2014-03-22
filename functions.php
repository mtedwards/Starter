<?php

require_once( get_template_directory() . '/lib/clean.php'); // do all the cleaning and enqueue here
require_once( get_template_directory() . '/lib/foundation.php'); // load Foundation specific functions like top-bar
require_once( get_template_directory() . '/lib/theme-functions.php'); // load Foundation specific functions like top-bar
require_once( get_template_directory() . '/lib/class-tgm-plugin-activation.php' );
require_once( get_template_directory() . '/lib/theme-require-plugins.php' );

/**********************
Add theme supports
**********************/
function starter_theme_support() {

	// Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
	add_theme_support('post-thumbnails');
	add_image_size( 'small-feature', 400, 247, true ); // Ratio 10:6.18
	add_image_size( 'medium-feature', 600, 371, true ); // Ratio 10:6.18
	add_image_size( 'children-feature', 600, 600, true ); // Ratio 1:1
	
	// rss thingy
	add_theme_support('automatic-feed-links');
	
	// Add post formarts supports. http://codex.wordpress.org/Post_Formats
	add_theme_support('post-formats', array('gallery', 'link', 'image', 'video', 'audio'));
	
	// Add menu supports. http://codex.wordpress.org/Function_Reference/register_nav_menus
	add_theme_support('menus');
	register_nav_menus(array(
		'primary' => __('Primary Navigation', 'reverie')
	));

}
	
add_action('after_setup_theme', 'starter_theme_support'); 

	// create widget areas: sidebar, footer
	$sidebars = array('Sidebar');
	foreach ($sidebars as $sidebar) {
		register_sidebar(array('name'=> $sidebar,
			'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
			'after_widget' => '</div></article>',
			'before_title' => '<h6><strong>',
			'after_title' => '</strong></h6>'
		));
	}


// return entry meta information for posts, used by multiple loops.
function entry_meta() {
		echo '<p class="byline"><time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('Posted on %s at %s.', 'starter'), get_the_time('l, F jS, Y'), get_the_time()) .'</time></p>';
		//echo '<p class="byline author">'. __('Written by', 'starter') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
}