<?php

namespace App;

use Carbon\Carbon;

class DateConversion
{
	public $firstDate;
	public $secondDate;
	private $conversion;

	public function __construct($firstDate, $secondDate, $conversion = null)
	{
		if (is_array($firstDate)) {
			$this->firstDate = Carbon::create($firstDate['date']);
			$this->firstDate->setTimezone($firstDate['timezone']);
		} else {
			$this->firstDate = Carbon::create($firstDate);
		}

		if (is_array($secondDate)) {
			$this->secondDate = Carbon::create($secondDate['date']);
			$this->secondDate->setTimezone($secondDate['timezone']);
		} else {
			$this->secondDate = Carbon::create($secondDate);
		}
		
		$this->conversion = $conversion;
	}

	public function getNumberOfDaysBetweenTwoDates()
	{
		$numberOfDays = $this->firstDate->diffInDays($this->secondDate) - 1;

		if (! is_null($this->conversion)) {
			return $this->{$this->conversion}($numberOfDays);
		}

		return $numberOfDays;
	}

	public function getNumberOfWeekdaysBetweenTwoDates()
	{
		$numberOfWeekDays =  $this->firstDate->diffInDaysFiltered(function(Carbon $date) use (&$days) {
			return ! $date->isWeekend();
		}, $this->secondDate) - 1;

		if (! is_null($this->conversion)) {
			return $this->{$this->conversion}($numberOfWeekDays);
		}

		return $numberOfWeekDays;
	}

	public function getNumberOfWeeksBetweenTwoDates()
	{
		$numberOfWeeks = $this->firstDate->diffInWeeks($this->secondDate);

		if (! is_null($this->conversion)) {
			$days = $numberOfWeeks * 7;
			return $this->{$this->conversion}($days);
		}

		return $numberOfWeeks;
	}

	private function seconds($numberOfDays)
	{
		return $numberOfDays * 86400;
	}

	private function minutes($numberOfDays)
	{
		return $numberOfDays * 1440;
	}

	private function hours($numberOfDays)
	{
		return $numberOfDays * 24;
	}

	private function years($numberOfDays)
	{
		return $numberOfDays / 365;
	}
}