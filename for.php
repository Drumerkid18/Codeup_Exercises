<?php

echo "Please enter Starting Number\n";
$low = trim(fgets(STDIN));
echo "Please enter Ending Number\n";
$high = trim(fgets(STDIN));

for ($low; $low <= $high; $low++){
	echo "\$low has a value of {$low}\n";
}
