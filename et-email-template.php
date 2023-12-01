<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://enginethemes.com
 * @since             1.0.0
 * @package           Et_Email_Template
 *
 * @wordpress-plugin
 * Plugin Name:       ET Email Template
 * Plugin URI:        https://enginethemes.com
 * Description:       An plugin to create awesome email template for your site
 * Version:           1.0.0
 * Author:            EngineThemes
 * Author URI:        https://enginethemes.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       et-email-template
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ET_EMAIL_TEMPLATE_VERSION', '1.0.0' );
define( 'ET_EMAIL_TEMPLATE_PATH', dirname( __FILE__ ) );
define( 'ET_EMAIL_TEMPLATE_URL', plugin_dir_url( __FILE__ ) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-et-email-template-activator.php
 */
function activate_et_email_template() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-et-email-template-activator.php';
	Et_Email_Template_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-et-email-template-deactivator.php
 */
function deactivate_et_email_template() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-et-email-template-deactivator.php';
	Et_Email_Template_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_et_email_template' );
register_deactivation_hook( __FILE__, 'deactivate_et_email_template' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-et-email-template.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_et_email_template() {

	$plugin = new Et_Email_Template();
	$plugin->run();

}
run_et_email_template();

//code here
function require_et_email_template_files()
{
	require_once ET_EMAIL_TEMPLATE_PATH . '/includes/functions.php';
	require_once ET_EMAIL_TEMPLATE_PATH . '/admin/settings_fields.php';
	//require_once ET_EMAIL_TEMPLATE_PATH . '/includes/index.php';
	
}
add_action( 'after_setup_theme', 'require_et_email_template_files' ); 

//end code