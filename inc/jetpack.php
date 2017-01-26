<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Single Site
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function single_site_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'single_site_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function single_site_jetpack_setup
add_action( 'after_setup_theme', 'single_site_jetpack_setup' );

function single_site_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function single_site_infinite_scroll_render