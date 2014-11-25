<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $value){
	if(is_scalar($value)){
		echo "$value is Scalar\n";
	}
	// if(is_int($value)){
	// 	echo "Integer\n";
	// }elseif(is_float($value)){
	// 	echo "Float\n";
	// }elseif(is_bool($value)){
	// 	echo 'Boolean' . PHP_EOL;
	// }elseif(is_array($value)){
	// 	echo "Array\n";
	// }elseif(is_null($value)){
	// 	echo 'NULL' . PHP_EOL;
	// }else{
	// 	echo "String\n";
	// }
}
