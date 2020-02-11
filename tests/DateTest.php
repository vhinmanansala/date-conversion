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
}