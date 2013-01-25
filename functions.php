<?php

artit();

function artit() {
	// Register nav menu
	register_nav_menu( 'primary', __( 'Primary Menu', 'artit' ) );

	// Add support for featured images
	add_theme_support( 'post-thumbnails' );

	// Set timezone
	date_default_timezone_set('America/Chicago');
}