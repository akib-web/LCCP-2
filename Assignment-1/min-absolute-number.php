<?php
/* Problem 1:
Given a list of integers, find the minimum of their absolute values. 
Note:
'Absolute values' means the non-negative value without regard to its sign. For example, the Absolute value of 123 is 123, and the Absolute value of -123 is also 123. 

Sample input 1:
10 12 15 189 22 2 34
Sample output 1: 
2

Sample input 2:
10 -12 34 12 -3 123
Sample output 2:
3
 */
$sample_numbers1 = [10, 12, 15, 189, 22, -2, 34];
$sample_numbers2 = [10, -12, 34, 12, -3, 123];

function minAbsNumber(array $numbers)
{
  $minAbsNumber = $numbers[0];
  foreach ($numbers as $key => $value) {
    if ($minAbsNumber > $value) {
      $minAbsNumber = $value;
    }
  }

  if ($minAbsNumber < 0) {
    $minAbsNumber *= -1;
  }

  return $minAbsNumber;
}

echo minAbsNumber($sample_numbers1);
