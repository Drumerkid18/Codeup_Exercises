<?php

$nothing = null;
$something = '';
$array = array(1, 2, 3);

// unset($something);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function set_or_empty($a){
	if(isset($a)){
		return "SET" . PHP_EOL;
	}elseif (empty($a)){
		return "EMPTY" . PHP_EOL;
	}
}


// TEST: If var $nothing is set, display '$nothing is SET'
// TEST: If var $nothing is empty, display '$nothing is EMPTY'

echo "\$nothing is " . set_or_empty($nothing);



// TEST: If var $something is set, display '$something is SET'

echo "\$something is " . set_or_empty($something);


// Serialize the array $array, and output the results
$serialize = serialize($array);
echo $serialize . PHP_EOL;


// Unserialize the array $array, and output the results
$serialize = unserialize($serialize);
print_r($serialize) . PHP_EOL;


