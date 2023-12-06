<?php
add_action( 'wp_enqueue_scripts', 'twentytwentyonechild_wp_enqueue_scripts' );
function twentytwentyonechild_wp_enqueue_scripts() {
	wp_enqueue_style( 'twentytwentyonechild-style',
        get_stylesheet_uri(),
		array( 'twenty-twenty-one-style' ),
		wp_get_theme()->get( 'Version' ) // This only works if you have Version defined in the style header.
	);
}

function enqueue_child_theme_styles() {
    wp_enqueue_style( 'child-theme-css', get_stylesheet_directory_uri() . './assets/child-style.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles' );

// comment 