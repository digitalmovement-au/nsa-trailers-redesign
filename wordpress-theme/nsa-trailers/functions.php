<?php
/**
 * NSA Trailers theme setup.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	register_nav_menus( array( 'primary' => __( 'Primary Menu', 'nsa-trailers' ) ) );
} );

add_action( 'wp_enqueue_scripts', function () {
	$ver = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'nsa-fonts', 'https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@62..125,400..900&family=Inter:wght@400;500;600;700&display=swap', array(), null );
	wp_enqueue_style( 'nsa-main', get_template_directory_uri() . '/nsa.css', array( 'nsa-fonts' ), $ver );
	wp_enqueue_script( 'nsa-main', get_template_directory_uri() . '/nsa.js', array(), $ver, true );
} );

add_filter( 'script_loader_tag', function ( $tag, $handle ) {
	return 'nsa-main' === $handle ? str_replace( ' src', ' defer src', $tag ) : $tag;
}, 10, 2 );

/* LocalBusiness schema on every page */
add_action( 'wp_head', function () {
	echo '<script type="application/ld+json">' . wp_json_encode( json_decode( '{"@context": "https://schema.org", "@type": "LocalBusiness", "name": "No Strings Attached Trailer Hire", "url": "https://www.nsatrailers.com.au/", "telephone": "+61447943160", "email": "bodhi@lockii.app", "image": "https://cdn.lockii.app/f924369c-811d-4f8e-b768-aecd5cfa0ce8.png", "areaServed": ["Upper Kedron", "Gaythorne", "Brisbane"], "address": {"@type": "PostalAddress", "addressLocality": "Brisbane", "addressRegion": "QLD", "addressCountry": "AU"}, "openingHours": "Mo-Su 00:00-23:59"}', true ) ) . '</script>' . "\n";
} );
