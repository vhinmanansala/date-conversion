<?php

namespace App;

use Carbon\Carbon;

class DPSDate
{
	private $firstDate;
	private $secondDate;

	public function __construct($firstDate, $secondDate)
	{
		$this->firstDate = Carbon::create($firstDate);
		$this->secondDate = Carbon::create($secondDate);
	}

	public function getNumberOfDaysBetweenTwoDates()
	{
		return $this->firstDate->diffInDays($this->secondDate) - 1;
	}

	public function getNumberOfWeekdaysBetweenTwoDates()
	{
		return $this->firstDate->diffInDaysFiltered(function(Carbon $date) use (&$days) {
			return ! $date->isWeekend();
		}, $this->secondDate) - 1;
	}
}