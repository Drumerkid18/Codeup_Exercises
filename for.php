<?php

echo "Please enter Starting Number\n";
$low = trim(fgets(STDIN));
echo "Please enter Ending Number\n";
$high = trim(fgets(STDIN));

echo "Would you like to set Increment Value\n";
$yes_or_no = trim(fgets(STDIN));

if ($yes_or_no == 'yes'){
		echo "Please enter Increment Value\n";
		$incrementer = trim(fgets(STDIN));
}else{
	$incrementer = 1;
}

for ($low; $low <= $high;$low += $incrementer){
	echo "\$low has a value of {$low}\n";
}
