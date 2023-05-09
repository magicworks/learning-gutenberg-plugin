<?php
/**
 * Plugin Name:       Learning Gutenberg Plugin
 * Description:       Learning Gutenberg Plugin.
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Laura Lieknina
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       learning-gutenberg-plugin
 *
 */

function learning_gutenberg_plugin_enqueue_assets() {

    $asset_file = include(plugin_dir_path( __FILE__ ) . 'build/index.asset.php');

    wp_enqueue_script( 'learning-gutenberg-plugin-script', plugins_url('build/index.js', __FILE__), $asset_file['dependencies'], $asset_file['version']);

}

add_action( 'enqueue_block_editor_assets', 'learning_gutenberg_plugin_enqueue_assets' );

