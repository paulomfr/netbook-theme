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
 * Assets.
 */

// Editor.
function enqueue_editor()
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
    wp_enqueue_script( 'netbook.scripts.editor' );
    wp_enqueue_style( 'netbook.styles.editor' );
}
add_action( 'enqueue_block_editor_assets', 'enqueue_editor' );
