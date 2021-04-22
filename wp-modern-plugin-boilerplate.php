<?php

/**
 * The plugin bootstrap file.
 *
 * @link              https://github.com/fedek6/wp-modern-plugin-boilerplate
 * @since             1.0.0
 * @package           wp_modern_plugin_boilerplate
 *
 * @wordpress-plugin
 * Plugin Name:       {plugin_name}
 * Plugin URI:        {plugin_uri}
 * Requires PHP:      7.4
 * Requires at least: 5.2
 * Tested up to:      5.2
 * Description:       {plugin_description}
 * Version:           1.0.0
 * Author:            {author}
 * Author URI:        {author_uri}
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-modern-plugin-boilerplate
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Composer.
 */
require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

/**
 * Bootstrap plugin.
 */

/** @var string $assetsUrl */
$assetsUrl = plugin_dir_url(__FILE__) . 'assets/';

/** @var string $pluginName */
$pluginName = 'WpMPB';

$plugin = new \Fedek6\WpMPB\Bootstrap($pluginName, $assetsUrl, __DIR__, '1.0.0');

// Add components.
$plugin->registerComponent('frontendAssets', '\Fedek6\WpMPB\Components\FrontendAssets');
$plugin->registerComponent('adminAssets', '\Fedek6\WpMPB\Components\AdminAssets');
$plugin->registerComponent('i18n', '\Fedek6\WpMPB\Components\I18n');

// Plugin lifecycle.
register_activation_hook( __FILE__, ['\Fedek6\WpMPB\AbstractActivation', 'run']);
register_deactivation_hook( __FILE__, ['\Fedek6\WpMPB\AbstractDeactivation', 'run']);

$plugin->run();
