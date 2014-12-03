<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark, Neil DeGrasse Tyson';

$physicistsArray = explode(', ', $physicistsString);
$lastItem = array_pop($physicistsArray);
var_dump($physicistsArray);

array_push($physicistsArray, 'and ' . $lastItem);
$famousFakePhysicists = implode(', ', $physicistsArray);
var_dump($famousFakePhysicists);
