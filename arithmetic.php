<?php

function add($a, $b) {
    if(is_numeric($a) && is_numeric($b)){
    	echo $a + $b . PHP_EOL;
    }else {
    	echo "ERROR: Both arguments mus be numeric\n";
    }
}

function subtract($a, $b) {
	if(is_numeric($a) && is_numeric($b)){
    	echo $a - $b . PHP_EOL;
    }else {
    	echo "ERROR: Both arguments mus be numeric\n";
    }
}

function multiply($a, $b) {
	if(is_numeric($a) && is_numeric($b)){
    	echo $a * $b . PHP_EOL;
    }else {
    	echo "ERROR: Both arguments mus be numeric\n";
    }
}

function divide($a, $b) {
    if(is_numeric($a) && is_numeric($b)){
    	if($a == 0.0 || $b == 0.0){
    		echo "ERROR: Attempt to divide by 0\n";
    	}else{
    		echo $a / $b . PHP_EOL;
    	}	
    }else {
    	echo "ERROR: Both arguments mus be numeric\n";
    }
}

function modulus($a, $b) {
	if(is_numeric($a) && is_numeric($b)){
    	echo $a % $b . PHP_EOL;
    }else {
    	echo "ERROR: Both arguments mus be numeric\n";
    }
}

add('taco', 5);

subtract('migas', 20);

multiply('tortas', 10);

divide(0, 10);

modulus('rice', 4);

