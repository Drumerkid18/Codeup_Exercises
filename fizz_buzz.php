<?php

for($i = 1; $i <= 100; $i++){

	$divisibleBy3 = $i % 3 == 0;
	$divisibleBy5 = $i % 5 == 0;

	// reminder set each value compareable to 0
	if($divisibleBy3 && $divisibleBy5) {
		echo "FizzBuzz\n";
	}elseif($divisibleBy3){
		echo "Fizz\n";
	}elseif($divisibleBy5){
		echo "Buzz\n";	
	}else{
		echo "$i\n";
	}
}