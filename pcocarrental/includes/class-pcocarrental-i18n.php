<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://yeasir.adaptstoday.co.uk/
 * @since      1.0.0
 *
 * @package    Pcocarrental
 * @subpackage Pcocarrental/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Pcocarrental
 * @subpackage Pcocarrental/includes
 * @author     Md Yeasir Arafat <frahim5@gmail.com>
 */
class Pcocarrental_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'pcocarrental',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
