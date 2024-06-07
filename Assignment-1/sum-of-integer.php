<?php
/* Problem 5:
Given an integer n, find the sum of the digits of the integer.

Sample input 1:
62343
Sample output 1: 
18

Sample input 2:
1000
Sample output 2: 
1 */
function sumOfInteger(int $number)
{
  $array = str_split($number);
  $result = 0;
  foreach ($array as $key => $value) {
    $result += $value;
  }
  return $result;
}

echo sumOfInteger(1000);
