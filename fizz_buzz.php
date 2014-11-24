<?php
$low = 0;
$high = 100;

for($low = 1; $low <= 100; $low++){

	// reminder set each value compareable to 0
	if((($low % 5 == 0) && ($low % 3 == 0))) {
		echo "FizzBuzz\n";
	}
	elseif(0 == $low % 3){
		echo "Fizz\n";
	}
	elseif(0 == $low % 5){
		echo "Buzz\n";	
	}
	else{
		echo "$low\n";
	}
}