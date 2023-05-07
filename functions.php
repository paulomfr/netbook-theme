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
  add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'netbook_setup' );

/**
 * Registers navigation menus.
 *
 * @return void
 */
function netbook_register_menus()
{
  $locations = [
    'primary' => __( 'Primary', 'netbook' )
  ];

  register_nav_menus( $locations );
}
add_action( 'after_setup_theme', 'netbook_register_menus' );
