<?php
/**
 * Plugin Name: Create Vite Block
 * Description: A WordPress Block created using Vite.
 * Author: mrOttoW
 * Version: 0.1.0
 *
 * @package CreateViteBlock
 */

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Registers the dev server. It uses hooks to convert plugin scripts and
 * styles into modules, enabling HMR by sourcing them from the dev server.
 *
 * Should be wrapped conditionally with something like {@see wp_get_environment_type()}
 * so it doesn't run on production sites.
 */
( new \ViteWordPress\DevServer() )->register();

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_vite_block_example_dynamic_block_init() {
	register_block_type( __DIR__ . '/build' );
}

add_action( 'init', 'create_vite_block_example_dynamic_block_init' );