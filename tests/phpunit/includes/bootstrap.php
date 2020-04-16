<?php
/**
 * @package KraftnerWpTorroFormsSubmissionSource
 * @subpackage Tests
 */

$GLOBALS['wp_tests_options'] = array(
	'active_plugins' => array(
		'torro-forms/torro-forms.php',
		'kraftner-wp-torro-forms-submission-source/kraftner-wp-torro-forms-submission-source.php',
	),
);

require dirname( dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) ) . '/torro-forms/tests/phpunit/includes/bootstrap.php';

function _manually_load_extension() {
	require dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) . '/kraftner-wp-torro-forms-submission-source.php';
}

if ( defined( 'TORRO_MANUAL_LOAD' ) && TORRO_MANUAL_LOAD ) {
	tests_add_filter( 'muplugins_loaded', '_manually_load_extension' );
}

echo "Installing Kraftner WP Torro Forms Submission Source...\n";

activate_plugin( 'kraftner-wp-torro-forms-submission-source/kraftner-wp-torro-forms-submission-source.php' );
