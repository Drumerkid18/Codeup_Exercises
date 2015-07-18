<?php

function alpha($str){
	$strArray = explode(' ', ($str));
	foreach ($strArray as $value) {
		$value = str_split($value);
		sort($value);
		$something[] = implode('', $value); 
	}
	$something = implode(PHP_EOL, $something);
	return $something;
}

echo "Enter your phrase ";
$string = trim(fgets(STDIN));
echo alpha($string);
