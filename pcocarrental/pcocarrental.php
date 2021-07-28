<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://yeasir.adaptstoday.co.uk/
 * @since             1.0.0
 * @package           Pcocarrental
 *
 * @wordpress-plugin
 * Plugin Name:       PCO Car Rental
 * Plugin URI:        https://github.com/Frahim/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Md Yeasir Arafat
 * Author URI:        https://yeasir.adaptstoday.co.uk/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pcocarrental
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
if (!defined('WPINC')) {
  die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('PCOCARRENTAL_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pcocarrental-activator.php
 */
function activate_pcocarrental() {
  require_once plugin_dir_path(__FILE__) . 'includes/class-pcocarrental-activator.php';
  Pcocarrental_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pcocarrental-deactivator.php
 */
function deactivate_pcocarrental() {
  require_once plugin_dir_path(__FILE__) . 'includes/class-pcocarrental-deactivator.php';
  Pcocarrental_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_pcocarrental');
register_deactivation_hook(__FILE__, 'deactivate_pcocarrental');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-pcocarrental.php';

/**
 * The class responsible for defining all actions that occur in the Post Type
 * side of the site.
 */
require plugin_dir_path(__FILE__) . 'includes/pcocarposttype.php';

/**
 * The class responsible for defining all actions that occur in the pco-page-register
 * side of the site.
 */
require plugin_dir_path(__FILE__) . 'includes/pco-page-register.php';

/**
 * The class responsible for defining all actions that occur in the Short Code
 * side of the site.
 */
require plugin_dir_path(__FILE__) . 'includes/shortcode.php';


/**
 * The class responsible for defining all actions that occur in the Short Code
 * side of the site.
 */
require plugin_dir_path(__FILE__) . 'includes/carbonfield.php';

require plugin_dir_path(__FILE__) . 'includes/block.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pcocarrental() {

  $plugin = new Pcocarrental();
  $plugin->run();
}

run_pcocarrental();

