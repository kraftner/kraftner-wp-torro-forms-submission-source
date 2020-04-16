<?php
/**
 * Extension main class
 *
 * @package KraftnerWpTorroFormsSubmissionSource
 * @since 1.0.0
 */

namespace Kraftner\KraftnerWpTorroFormsSubmissionSource;

use awsmug\Torro_Forms\Components\Extension as Extension_Base;
use Kraftner\KraftnerWpTorroFormsSubmissionSource\Element_Types\Submission_Source;
use Leaves_And_Love\Plugin_Lib\Assets;
use WP_Error;

/**
 * Extension main class.
 *
 * @since 1.0.0
 */
class Extension extends Extension_Base {

	/**
	 * The assets manager instance.
	 *
	 * @since 1.0.0
	 * @var Assets
	 */
	protected $assets;

	/**
	 * Checks whether the extension can run on this setup.
	 *
	 * @since 1.0.0
	 *
	 * @return WP_Error|null Error object if the extension cannot run on this setup, null otherwise.
	 */
	public function check() {
		return null;
	}

	/**
	 * Loads the base properties of the class.
	 *
	 * @since 1.0.0
	 */
	protected function load_base_properties() {
		$this->version      = '1.0.0';
		$this->vendor_name  = 'Kraftner';
		$this->project_name = 'KraftnerWpTorroFormsSubmissionSource';
	}

	/**
	 * Loads the extension's textdomain.
	 *
	 * @since 1.0.0
	 */
	protected function load_textdomain() {
		$this->load_plugin_textdomain( 'kraftner-wp-torro-forms-submission-source', '/languages' );
	}

	/**
	 * Instantiates the extension services.
	 *
	 * Any service instances registered in here can be retrieved from the outside,
	 * by calling a method with the same name of the property.
	 *
	 * @since 1.0.0
	 */
	protected function instantiate_services() {
		// This is sample code to register this extension's template location.
		// It can be removed if the extension does not include any templates.
		$this->parent_plugin->template()->register_location( 'kraftner-wp-torro-forms-submission-source', $this->path( 'templates/' ) );
	}

	/**
	 * Registers the 'submission_source' element types part of the extension.
	 *
	 * This method is sample code and can be removed.
	 *
	 * @since 1.0.0
	 *
	 * @param Element_Types $element_type_manager Element type manager.
	 */
	protected function register_submission_source_element_type($element_type_manager ) {
		$element_type_manager->register( 'submission_source', Submission_Source::class );
	}

	/**
	 * Sets up all action and filter hooks for the service.
	 *
	 * This method must be implemented and then be called from the constructor.
	 *
	 * @since 1.0.0
	 */
	protected function setup_hooks() {
		// The following hooks are sample code and can be removed.
		$this->actions[] = array(
			'name'     => 'torro_register_element_types',
			'callback' => array( $this, 'register_submission_source_element_type' ),
			'priority' => 10,
			'num_args' => 1,
		);
	}

	/**
	 * Checks whether the dependencies have been loaded.
	 *
	 * If this method returns false, the extension will attempt to require the composer-generated
	 * autoloader script. If your extension uses additional dependencies, override this method with
	 * a check whether these dependencies already exist.
	 *
	 * @since 1.0.0
	 *
	 * @return bool True if the dependencies are loaded, false otherwise.
	 */
	protected function dependencies_loaded() {
		return class_exists( 'APIAPI\Structure_WordPress\Structure_WordPress' );
	}
}
