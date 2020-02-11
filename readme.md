## Usage
### Installation

    <?php
	    require 'date-conversion/src/DateConversion';
    ?>

 **Get number of days between 2 dates**
 

    $firstDate = '11-02-2020';
	$secondDate = '14-02-2020';
	$date = new DateConversion($firstDate, $secondDate);
	$date->getNumberOfDaysBetweenTwoDates();

 **Get number of weekdays between 2 dates**
 

    $firstDate = '11-02-2020';
	$secondDate = '24-02-2020';
	$date = new DateConversion($firstDate, $secondDate);
	$date->getNumberOfWeekdaysBetweenTwoDates();

 **Get number of weeks between 2 dates**
 

    $firstDate = '11-02-2020';
	$secondDate = '02-03-2020';
	$date = new DateConversion($firstDate, $secondDate);
	$date->getNumberOfWeeksBetweenTwoDates();

 
  **Convert the results to seconds, minutes, hours, and years**
  
    $firstDate = '11-02-2020';
	$secondDate = '02-03-2020';
	
	//add third parameter when initialising
	$date = new DateConversion($firstDate, $secondDate, 'seconds');
	$date = new DateConversion($firstDate, $secondDate, 'minutes');
	$date = new DateConversion($firstDate, $secondDate, 'hours');
	$date = new DateConversion($firstDate, $secondDate, 'years');

 **Pass dates as an array to set a timezone**
    Refer to this [page](https://www.php.net/manual/en/timezones.php) for list of timezones
	
	$firstDate = array('date' => '11-02-2020', 'timezone' => 'Europe/Amsterdam');
	$secondDate = array('date' => '14-02-2020', 'timezone' => 'Australia/Adelaide');
	
	$date = new DateConversion($firstDate, $secondDate);

### Enter the following commands to run tests

    cd path-to-date-conversion
    vendor/bin/phpunit tests