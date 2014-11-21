<?php

$a = 5;
$b = 10;
$c = '10';

if ($a < $b) {
    // output the appropriate result
    echo "$a is less than $b\n";
}

if ($b > $a) {
    // output the appropriate result
    echo "$b is greater than $a\n";
}

if ($b >= $c) {
    // output the appropriate result
    echo "$b is greater than or equal to $c\n";
}

if ($b <= $c) {
    // output the appropriate result
    echo "$b is less than or equal to $c\n";
}

if ($b == $c) {
    // output the appropriate result
    echo "$b is equal to $c\n";
}

if ($b === $c) {
    // output the appropriate result
    echo "$b is identical to $c\n";
}

// output the appropriate result
if ($b != $c) {
    echo "$b is not equal to $c\n";
}

// output the appropriate result
if ($b !== $c) {
    echo "$b is not identical to $c\n";
}




// Shorten the next 2 statements into an if/else
echo $b < $c ? "$b is less than $c\n" : "$b is greater than $c\n";

// this is the same as this
    // if ($b < $c) {
    //     // output the appropriate result
    //     echo "$b is less than $c\n";

    // } else {
    //     echo "$b is greater than $c\n";
    //}

// Shorten the next 2 statements into an if/else
echo $a >= $c ? "$a is greater than or equal to $c\n" : "$a is less than $c\n";

    // if ($a >= $c) {
    //     // output the appropriate result
    //     echo "$a is greater than or equal to $c\n";

    // } else {
    //     echo "$a is less than $c\n";
    // }

// combine the next 4 conditionals into
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal
if ($a == $c) {
    // output the appropriate result
    echo "$a is equal to $c\n";

} elseif ($a === $c) {
    echo "$a is identical to $c\n";

} elseif ($a != $c) {
    echo "$a is not equal to $c\n";

} else {
    echo "$a is not identical to $c\n";
}

?>