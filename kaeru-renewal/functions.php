<?php
/**
 * kaeru-renewal theme functions.
 *
 * @package Kaeru_Renewal
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function kaeru_renewal_setup(): void {
	load_theme_textdomain( 'kaeru-renewal', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'responsive-embeds' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'メインナビゲーション', 'kaeru-renewal' ),
		)
	);
}
add_action( 'after_setup_theme', 'kaeru_renewal_setup' );

function kaeru_renewal_enqueue_assets(): void {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'kaeru-renewal-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array(),
		$theme_version
	);

	wp_enqueue_script(
		'kaeru-renewal-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		$theme_version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'kaeru_renewal_enqueue_assets' );
