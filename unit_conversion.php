<?php

// 3 tsp = 1 tbsp
// 6 tsp = 1 fl oz
// 48 tsp = 1 cup
// 96 tsp = 1 pint
// 192 tsp = 1 quart
// 768 tsp = 1 gallon
// $floz = 6 * $tsp;
// $cup = 48 * $tsp;
// $pint = 96 * $tsp;
// $quart = 192 * $tsp;
// $gallon = (768 * $tsp);
// $desiredAmount = '';

function getInput($upper = false){

    // Capture user input
    $cleaninput = trim(fgets(STDIN));

    // Only sometimes will we modify the input to uppercase, before returning. 
    if ($upper) {
        $cleaninput = strtoupper($cleaninput);
    }
    
    // Return user input 
    return $cleaninput;
 }

function fromTsp($baseAmount, $desiredAmount){
	echo 'What unit are we converting to? ' . PHP_EOL;

	$desiredUnit = getInput(true);


	if(($desiredUnit) == 'tbsp'){
		$tsp = 1;
		$tbsp = 3 * $tsp;

		echo 'How many teaspoons do we have? ' . PHP_EOL;
		
		$baseAmount = $getInput();
	}
		return $desiredAmount = ($baseAmount * 3) . 'Tbsp' . PHP_EOL;
}

function fromTbsp($baseAmount, $desiredAmount){

	switch (variable) {
		case 'value':
			# code...
			break;
		
		default:
			# code...
			break;
	}
}

function fromFloz($baseAmount, $desiredAmount){

	switch (variable) {
		case 'value':
			# code...
			break;
		
		default:
			# code...
			break;
	}
}

function fromCup($baseAmount, $desiredAmount){

	switch (variable) {
		case 'value':
			# code...
			break;
		
		default:
			# code...
			break;
	}
}

function fromPt($baseAmount, $desiredAmount){

	switch (variable) {
		case 'value':
			# code...
			break;
		
		default:
			# code...
			break;
	}
}

function fromQt($baseAmount, $desiredAmount){

	switch (variable) {
		case 'value':
			# code...
			break;
		
		default:
			# code...
			break;
	}
}

function fromGl($baseAmount, $desiredAmount){

	switch (variable) {
		case 'value':
			# code...
			break;
		
		default:
			# code...
			break;
	}
}

do {
	echo 'Select Base Unit of Measurement: ' . '(Tsp) (Tbsp) (floz) (Cup) (Pt) (Qt) (Gl) (Q)';

    $input = getInput();


	if(($input) == 'Tsp') {
		// $baseUnit = $tsp;
		$desiredAmount = '';
		$baseAmount = '';

		$tsp = fromTsp($baseAmount, $desiredAmount);

		echo "That equals $desiredAmount";
		



	}

} while(($input) != 'Q');
	echo "Goodbye\n";

exit(0);
//ask user for input measure unit (tsp), (tbsp), (floz), (cp), (pt).

// ask user for measurement float type

// ask what unit to convert to (tsp), (tbsp), (floz), (cp), (pt).