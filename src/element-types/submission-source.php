<?php
/**
 * Submission Source element type class
 *
 * @package KraftnerWpTorroFormsSubmissionSource
 * @since 1.0.0
 */

namespace Kraftner\KraftnerWpTorroFormsSubmissionSource\Element_Types;

use awsmug\Torro_Forms\DB_Objects\Elements\Element_Types\Element_Type;

/**
 * Class representing a field storing the submission source.
 *
 * @since 1.0.0
 */
class Submission_Source extends Element_Type {

	/**
	 * Validates a field value for an element.
	 *
	 * @since 1.0.0
	 *
	 * @param mixed      $value      The value to validate. It is already unslashed when it arrives here.
	 * @param Element    $element    Element to validate the field value for.
	 * @param Submission $submission Submission the value belongs to.
	 * @return mixed|WP_Error Validated value, or error object on failure.
	 */
	public function validate_field( $value, $element, $submission ) {

		return get_permalink();

	}

	/**
	 * Bootstraps the element type by setting properties.
	 *
	 * @since 1.0.0
	 */
	protected function bootstrap() {
		$this->slug        = 'submission_source';
		$this->title       = __( 'Submission Source', 'kraftner-wp-torro-forms-submission-source' );
		$this->description = __( 'A field storing the submission source.', 'kraftner-wp-torro-forms-submission-source' );
		$this->icon_svg_id = 'torro-icon-textfield';
	}

}
