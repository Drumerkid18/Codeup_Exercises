<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$dayOfWeek = date('N');

switch($dayOfWeek) {
	case 1: 

 		echo 'I hate Mondays';
 		break;

	case 2:
 
 		echo 'Tuesdays are for wine' . PHP_EOL;
 		break;

	case 3:
		echo 'Wednesdays are for Food Trucks' . PHP_EOL;
		break;

	case 4:
		echo 'Thursdays are the begining of the weekend' . PHP_EOL;
		break;

	case 5:
		echo 'Fridays are for Flexin' . PHP_EOL;
		break;

	case 6:
		echo 'Saturdays are for 6th St' . PHP_EOL;
		break;

	case 7:
		echo 'Sundays are for Brunch and Day Drinking - SundayFunday' . PHP_EOL;
		break;

}

if($dayOfWeek == 1){
	echo "I hate Mondays\n";

}elseif($dayOfWeek == 2){
	echo "Tuesdays are for wine\n";

}elseif($dayOfWeek == 3){
	echo "Wednesdays are for Food Trucks\n";

}elseif($dayOfWeek == 4){
	echo "Thursdays are the begining of the weekend\n";

}elseif($dayOfWeek == 5){
	echo "Fridays are for Flexin'\n";

}elseif($dayOfWeek == 6){
	echo "Saturdays are for 6th St\n";

}else{
	echo "Sundays are for Brunch and Day Drinking - SundayFunday\n";
}


