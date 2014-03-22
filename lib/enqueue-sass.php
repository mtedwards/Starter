<?php
/*********************
Enqueue the proper CSS
if you use Sass.
*********************/
function reverie_sass_style()
{
	// Register the main style
	wp_register_style( 'reverie-stylesheet', get_template_directory_uri() . '/css/mini-style.css', array(), '201402131635', 'all' );
	wp_enqueue_style( 'reverie-stylesheet' );
}
add_action( 'wp_enqueue_scripts', 'reverie_sass_style' );
?>