<?php

/**
 * Netbook theme.
 * This file adds functions to the Netbook theme.
 *
 * @package Netbook
 * @author  Collaborar
 * @license GNU General Public License v2 or later
 * @link    https://collaborar.com
 */

/**
 * Enqueue assets for block editor.
 *
 * @return void
 */
function netbook_setup()
{
	add_theme_support('wp-block-styles');
}
add_action('after_setup_theme', 'netbook_setup');

/**
 * Assets.
 */

// Editor.
function netbook_enqueue_editor()
{
	$template_directory = get_template_directory_uri();

	// Register scripts.
	wp_register_script(
		'netbook.scripts.editor',
		$template_directory . '/dist/editor.js',
	);

	wp_register_style(
		'netbook.styles.editor',
		$template_directory . '/dist/editor.css'
	);

	// Enqueue scripts.
	wp_enqueue_script('netbook.scripts.editor');
	wp_enqueue_style('netbook.styles.editor');
}
// add_action( 'enqueue_block_editor_assets', 'netbook_enqueue_editor' );

// Frontned.
function netbook_enqueue_frontend()
{
	$template_directory = get_template_directory_uri();

	// Register scripts.
	wp_register_script(
		'netbook.scripts.frontend',
		$template_directory . '/dist/editor.js',
	);

	wp_register_style(
		'netbook.styles.frontend',
		$template_directory . '/dist/editor.css'
	);

	// Enqueue scripts.
	wp_enqueue_script('netbook.scripts.frontend');
	wp_enqueue_style('netbook.styles.frontend');
}
// add_action( 'wp_enqueue_scripts', 'netbook_enqueue_frontend' );

/**
 * Registers navigation menus.
 *
 * @return void
 */
function netbook_register_menus()
{
	$locations = [
		'primary' => __('Primary', 'netbook')
	];

	register_nav_menus($locations);
}
add_action('after_setup_theme', 'netbook_register_menus');

/**
 * Register block related things.
 */
function netbook_register()
{
	// Block patterns categories.
	register_block_pattern_category(
		'netbook-patterns',
		[
			'label' => __('Netbook Patterns', 'netbook')
		]
	);
}
add_action('init', 'netbook_register');
