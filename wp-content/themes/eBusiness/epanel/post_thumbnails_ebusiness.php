<?php 

/* sets predefined Post Thumbnail dimensions */
if ( function_exists( 'add_theme_support' ) ) {
	
	add_theme_support( 'post-thumbnails' );
	
	//page.php, page-full.php
	add_image_size( 'pageimage', get_option($shortname.'_thumbnail_width_pages'), get_option($shortname.'_thumbnail_height_pages'), true );
	
	//thumbnail.php
	add_image_size( 'thumbnailimage', get_option($shortname.'_thumbnail_size'), get_option($shortname.'_thumbnail_size'), true );
	
	//default.php
	add_image_size( 'fromblog', 35, 35, true );
	
	//defaultcat.php, defaultindex.php
	add_image_size( 'thumbnailimage', get_option($shortname.'_thumbnail_size_index'), get_option($shortname.'_thumbnail_size_index'), true );

};
/* --------------------------------------------- */

?>