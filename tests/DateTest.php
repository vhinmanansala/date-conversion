<?php 

namespace App\Test;

use App\DPSDate;
use PHPUnit\Framework\TestCase;

Class DateTest extends TestCase 
{
	public function test_it_can_get_number_of_days_between_two_dates()
	{
		$firstDate = '11-02-2020';
		$secondDate = '14-02-2020';

		$date = new DPSDate($firstDate, $secondDate);
		$this->assertEquals(2, $date->getNumberOfDaysBetweenTwoDates());
	}

	public function test_it_can_get_number_of_weekdays_between_two_dates()
	{
		$firstDate = '10-02-2020';
		$secondDate = '24-02-2020';

		$date = new DPSDate($firstDate, $secondDate);
		$this->assertEquals(9, $date->getNumberOfWeekdaysBetweenTwoDates());
	}

	public function test_it_can_get_number_of_weeks_between_two_dates()
	{
		$firstDate = '11-02-2020';
		$secondDate = '02-03-2020';

		$date = new DPSDate($firstDate, $secondDate);
		$this->assertEquals(2, $date->getNumberOfWeeksBetweenTwoDates());
	}

	public function test_it_can_convert_the_result_to_seconds()
	{
		$firstDate = '11-02-2020';
		$secondDate = '14-02-2020';

		$date = new DPSDate($firstDate, $secondDate, 'seconds');
		$this->assertEquals(172800, $date->getNumberOfDaysBetweenTwoDates());

		$firstDate = '10-02-2020';
		$secondDate = '24-02-2020';

		$date = new DPSDate($firstDate, $secondDate, 'seconds');
		$this->assertEquals(777600, $date->getNumberOfWeekdaysBetweenTwoDates());

		$firstDate = '11-02-2020';
		$secondDate = '02-03-2020';

		$date = new DPSDate($firstDate, $secondDate, 'seconds');
		$this->assertEquals(1209600, $date->getNumberOfWeeksBetweenTwoDates());
	}

	public function test_it_can_convert_the_result_to_minutes()
	{
		$firstDate = '11-02-2020';
		$secondDate = '14-02-2020';

		$date = new DPSDate($firstDate, $secondDate, 'minutes');
		$this->assertEquals(2880, $date->getNumberOfDaysBetweenTwoDates());

		$firstDate = '10-02-2020';
		$secondDate = '24-02-2020';

		$date = new DPSDate($firstDate, $secondDate, 'minutes');
		$this->assertEquals(12960, $date->getNumberOfWeekdaysBetweenTwoDates());

		$firstDate = '11-02-2020';
		$secondDate = '02-03-2020';

		$date = new DPSDate($firstDate, $secondDate, 'minutes');
		$this->assertEquals(20160, $date->getNumberOfWeeksBetweenTwoDates());
	}
}