<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://dmitrymayorov.com
 * @since      0.1.0
 *
 * @package    Insert_Code_Lite
 * @subpackage Insert_Code_Lite/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    Insert_Code_Lite
 * @subpackage Insert_Code_Lite/public
 * @author     Dmitry Mayorov
 */
class Insert_Code_Lite_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $name    The ID of this plugin.
	 */
	private $name;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 * @var      string    $name       The name of the plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $name, $version ) {

		$this->name = $name;
		$this->version = $version;

	}

	/**
	 * Print code to 'head' section.
	 *
	 * @since    0.1.0
	 */
	public function print_header_scripts() {

		$value = get_option( 'iclp_code' );
		$value = $value['header_scripts'];

		if ( ! empty( $value ) ) {
			echo $value;
		}
	}


	/**
	 * Print code before closing 'body' tag.
	 *
	 * @since    0.1.0
	 */
	public function print_footer_scripts() {

		$value = get_option( 'iclp_code' );
		$value = $value['footer_scripts'];

		if ( ! empty( $value ) ) {
			echo $value;
		}
	}

}
