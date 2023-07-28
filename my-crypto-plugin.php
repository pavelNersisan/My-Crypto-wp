<?php
/**
 * Plugin Name: My Crypto Plugin
 * Plugin URI: https://www.pawelnersisian.com
 * Description: A plugin for displaying cryptocurrency prices and data
 with graph data
 * Version: 1.0.0
 * Author: Pawel Nersisian
 * Author URI: https://www.pawelnersisian.com
 * License: GPL2
 * Text Domain: my-crypto-plugin
 *
 * @link              https://www.pawelnersisian.com
 * @since             1.0.0
 * @package           My_Crypto_Plugin
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define the plugin file path and directory.
define( 'MY_CRYPTO_PLUGIN_FILE', __FILE__ );
define( 'MY_CRYPTO_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// Include the bootstrap file.
require_once MY_CRYPTO_PLUGIN_DIR . 'bootstrap.php';