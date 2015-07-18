<?php

 // first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function doTheyExist($names){
	$name = 'Tina';
	$results = array_search($name, $names);
		if($results === false){
		return "Not Found\n";
	}elseif($results >= 0);
		return "You found: {$names[$results]}" . PHP_EOL;
}

function howManyInCommon($names, $compare){
	$count = 0;
	foreach ($names as $name) {
		if(array_search($name, $compare) !== false){
			$count++;
		}
	}
	return "These Array's have $count in common" . PHP_EOL;
}

echo doTheyExist($names);
echo howManyInCommon($names, $compare);