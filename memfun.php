<?php

function findLargest($a, $b) {
    return max($a, $b);
}


$a = readline("Enter the first number: ");
$b = readline("Enter the second number: ");


$largest = findLargest($a, $b);
echo "The largest number is: $largest\n";
