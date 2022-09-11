<?php

// sidebars
if(function_exists('register_sidebar'))
{
	register_sidebar( 'name=Sidebar right&id=sideright');
}

// image sizes
if ( function_exists( 'add_theme_support' ) ) {

add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)

add_theme_support( 'post-thumbnails', array( 'soc' ) );
add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)


add_image_size( 'full', 9999, 9999 );
add_image_size( 'work-thumb', 700, 9999 );
add_image_size( 'thumb', 275, 9999, true );

}

// option page

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

// excerpt length (chars)
function wpdocs_custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


add_filter('excerpt_more', function($more) {
	return '...';
});


?>
