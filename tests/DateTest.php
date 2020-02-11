<?php 

namespace App\Test;

use App\DPSDate;
use PHPUnit\Framework\TestCase;

Class DateTest extends TestCase 
{
	public function test_it_can_get_number_of_days_between_to_dates()
	{
		$firstDate = '11-02-2020';
		$secondDate = '14-02-2020';

		$date = new DPSDate($firstDate, $secondDate);
		$this->assertEquals(2, $date->getNumberOfDaysBetweenTwoDates());
	}
}