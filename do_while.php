<?php

$a = 2;

do { 
	echo "$a\n";
	// reasign $a
	// $a = ($a * $a)
	$a *= $a;
} while ($a < 1000000 );