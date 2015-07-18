<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark, Neil DeGrasse Tyson';

function humanizedList($anyString, $alphasort = false){

	$anyArray = explode(', ', $anyString);
	if($alphasort){
		sort($anyArray);
	}
		$lastItem = array_pop($anyArray);
		array_push($anyArray, 'and ' . $lastItem);
		$anyString = implode(', ', $anyArray);
	

	return $anyString;
}


$famousFakePhysicists = humanizedList($physicistsString);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";