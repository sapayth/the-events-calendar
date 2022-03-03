<?php
/**
 * A migration strategy that will not perform any migration and will mark the
 * migration as completed for the provided event.
 *
 * @since TBD
 */

namespace TEC\Events\Custom_Tables\V1\Migration\Strategies;

use TEC\Events\Custom_Tables\V1\Migration\Reports\Event_Report;

/**
 * Class Null_Migration_Strategy.
 *
 * @since TBD
 */
class Null_Migration_Strategy implements Strategy_Interface {
	/**
	 * {@inheritDoc}
	 */
	public static function get_slug() {
		return 'tec-null-strategy';
	}

	/**
	 * The method will not actually do anything and will flag
	 * the Event as migrated.
	 *
	 * @since TBD
	 *
	 * @param Event_Report $event_report A reference to the report
	 *                                   value object that should be
	 *                                   updated with the migration results.
	 *
	 * @return Event_Report A reference to the updated Event report.
	 */
	public function apply( Event_Report $event_report ) {
		$event_report->migration_success();
		return $event_report;
	}

	public function undo( Event_Report $event_report ) {
		// TODO: Implement undo() method.
	}
}