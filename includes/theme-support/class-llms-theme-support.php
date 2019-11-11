<?php
/**
 * Manage Theme Support classes
 *
 * @package  LifterLMS/Classes/ThemeSupport
 *
 * @since [version]
 * @version [version]
 */

defined( 'ABSPATH' ) || exit;

/**
 * LLMS_Twenty_Twenty class..
 *
 * @since [version]
 */
class LLMS_Theme_Support {

	/**
	 * Constructor
	 *
	 * @since [version]
	 *
	 * @return void
	 */
	public function __construct() {

		$this->includes();

	}

	/**
	 * Conditionally require additional theme support classes.
	 *
	 * @since [version]
	 *
	 * @return void
	 */
	protected function includes() {

		switch ( get_template() ) {

			case 'twentynineteen':
				require_once 'class-llms-twenty-nineteen.php';
				break;

			case 'twentytwenty':
				require_once 'class-llms-twenty-twenty.php';
				break;

		}

	}

}

return new LLMS_Theme_Support();