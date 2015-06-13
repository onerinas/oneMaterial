<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package oneMaterial
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function onematerial_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'onematerial_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function onematerial_jetpack_setup
add_action( 'after_setup_theme', 'onematerial_jetpack_setup' );

function onematerial_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function onematerial_infinite_scroll_render