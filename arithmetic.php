<?php

function error($a, $b){
	if(!is_numeric($a)){  
	  	return "ERROR: $a is not a numeric value," . "\n" . "Please enter a number\n";
	}elseif(!is_numeric($b)){
    	return "ERROR: $b is not a numeric value," . "\n" .  "Please enter a number\n";
	}elseif($a == 0.0 && $b == 0.0){
    		return "ERROR: neither \$a or \$b can be equal to 0" . "\n" . "Please enter a value greater than 0\n";
    	}elseif($a == 0.0){	
    		return "ERROR: \$a cannot be equal to 0" . "\n" . "Please enter a value greater than 0\n";    		
    	}else{
    		return "ERROR: \$b cannot be equal to 0" . "\n" . "Please enter a value greater than 0\n";    		
    	}			
}

function add($a, $b) {
    if(is_numeric($a) && is_numeric($b)){
    	echo $a + $b . PHP_EOL;
    }elseif(!is_numeric($a)) {
    	return error($a, $b);
    	// echo "ERROR: $a is not a numeric value,\n";
    	// echo "Please enter a number\n";
    }else{
    	return error($a, $b);
    	// echo "ERROR: $b is not a numeric value,\n";
    	// echo "Please enter a number\n";
    }
}

function subtract($a, $b) {
	if(is_numeric($a) && is_numeric($b)){
    	echo $a - $b . PHP_EOL;
    }elseif(!is_numeric($a)) {
    	return error($a, $b);
    	// echo "ERROR: $a is not a numeric value,\n";
    	// echo "Please enter a number\n";
    }else{
    	return error($a, $b);
    	// echo "ERROR: $b is not a numeric value,\n";
    	// echo "Please enter a number\n";
    }
}

function multiply($a, $b) {
	if(is_numeric($a) && is_numeric($b)){
    	echo $a * $b . PHP_EOL;
    }elseif(!is_numeric($a)) {
    	return error($a, $b);
    	// echo "ERROR: $a is not a numeric value,\n";
    	// echo "Please enter a number\n";
    }else{
    	return error($a, $b);    	
    	// echo "ERROR: $b is not a numeric value,\n";
    	// echo "Please enter a number\n";
    }
}

function divide($a, $b) {
    if(is_numeric($a) && is_numeric($b)){
    	if($a == 0.0 && $b == 0.0){
    	return error($a, $b);    		
    		// echo "ERROR: neither \$a or \$b can be equal to 0\n";
    		// echo "Please enter a value greater than 0\n";
    	}elseif($a == 0.0){	
    	return error($a, $b);    		
    		// echo "ERROR: \$a cannot be equal to 0\n";
    		// echo "Please enter a value greater than 0\n";    		
    	}elseif($b == 0.0){
    	return error($a, $b);    		
    		// echo "ERROR: \$b cannot be equal to 0\n";
    		// echo "Please enter a value greater than 0\n";    		
    	}else{
    		echo $a / $b . PHP_EOL;
    	}	
    }elseif(!is_numeric($a)) {
    	return error($a, $b);
    	// echo "ERROR: $a is not a numeric value,\n";
    	// echo "Please enter a number\n";
    }else{
    	return error($a, $b);
    	// echo "ERROR: $b is not a numeric value,\n";
    	// echo "Please enter a number\n";
    }
}

function modulus($a, $b) {
	if(is_numeric($a) && is_numeric($b)){
       	if($a == 0.0 && $b == 0.0){
       		return error($a, $b);
    		// echo "ERROR: neither \$a or \$b can be equal to 0\n";
    		// echo "Please enter a value greater than 0\n";
    	}elseif($a == 0.0){	
    		return error($a, $b);
    		// echo "ERROR: \$a cannot be equal to 0\n";
    		// echo "Please enter a value greater than 0\n";
    	}elseif($b == 0.0){
    		return error($a, $b);
    		// echo "ERROR: \$b cannot be equal to 0\n";
    		// echo "Please enter a value greater than 0\n";
    	}else{
    		echo $a % $b . PHP_EOL;
    	}	
    }elseif(!is_numeric($a)) {
    	return error($a, $b);
    	// echo "ERROR: $a is not a numeric value,\n";
    	// echo "Please enter a number\n";
    }else{
    	return error($a, $b);
    	// echo "ERROR: $b is not a numeric value,\n";
    	// echo "Please enter a number\n";
    }
}

echo add('taco', 5);

echo subtract('migas', 20);

echo multiply('tortas', 10);

echo divide(0, 0);

echo modulus(0, 0);

