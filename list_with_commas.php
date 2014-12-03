<?php
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark, Neil DeGrasse Tyson';

function humanizedList($anyString){


	$anyArray = explode(', ', $anyString);
	$lastItem = array_pop($anyArray);
	// var_dump($physicistsArray);

	array_push($anyArray, 'and ' . $lastItem);
	$anyString = implode(', ', $anyArray);
	return $anyString;
	// var_dump($famousFakePhysicists);
}

$famousFakePhysicists = humanizedList($physicistsString);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";