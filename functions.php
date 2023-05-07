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
