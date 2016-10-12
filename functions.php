<?php
/**
 * Laboratoire développeur functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Laboratoire_développeur
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function labo_du_dev_widgets_init() {}
add_action( 'widgets_init', 'labo_du_dev_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function labo_du_dev_scripts() {
	wp_enqueue_style( 'labo-du-dev-theme-style-reset', get_stylesheet_directory_uri() . '/reset.css' );
	wp_enqueue_style( 'labo-du-dev-theme-style-parallax', get_stylesheet_directory_uri() . '/parallax.css' );
	wp_enqueue_style( 'labo-du-dev-theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'labo-du-dev-theme-script-parallax', get_stylesheet_directory_uri() . '/js/parallax.js' );
}

add_action( 'wp_enqueue_scripts', 'labo_du_dev_scripts' );

if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
}
