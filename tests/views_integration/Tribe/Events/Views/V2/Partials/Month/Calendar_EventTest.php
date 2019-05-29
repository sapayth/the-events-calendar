<?php

namespace Tribe\Events\Views\V2\Partials\Month;

use Tribe\Events\Views\V2\Partials\TestCase;

class Calendar_EventTest extends TestCase
{

	protected $partial_path = 'month/calendar-event';

	/**
	 * Test render with context
	 */
	public function test_render_with_context() {
		tribe_events()->set_args( [
			'start_date' => '2018-01-01 10am',
			'timezone'   => 'Europe/Paris',
			'duration'   => 3 * HOUR_IN_SECONDS,
			'title'      => 'Test Event - 2018-01-01 10am',
			'status'     => 'publish',
		] )->create();

		$this->assertMatchesSnapshot( $this->get_partial_html( [ 'event' => tribe_events()->first() ] ) );
	}
}
