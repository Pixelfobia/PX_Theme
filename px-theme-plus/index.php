<?php

/*
 * Plugin Name:       PX Theme Plus
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

 if(!function_exists('add_action')){
		 echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
		 exit;
 }

 // Setup
 define('UP_PLUGIN_DIR', plugin_dir_path(__FILE__));

 // Includes
 include(UP_PLUGIN_DIR . 'includes/register-blocks.php');

 // Hooks
 add_action('init', 'up_register_blocks');