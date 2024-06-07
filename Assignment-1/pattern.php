<?php

/* Problem 4:
Print the following pattern based on the given number n (can be any number). 
Sample input: 5 
Sample output: 
    *
   ***
  *****
 *******
********* 
*/

function pyramidPattern(int $length)
{
  $starCount = 1;

  $result = '';
  for ($loop = 1; $loop <= $length; $loop++) {
    $space = $length - 1;
    for ($stars = 0; $stars < $starCount; $stars++) {
      for ($space; $space >= $loop; $space--) {
        // printf(" ");
        $result .= " ";
      }
      // printf("*");
      $result .= "*";
    }
    $starCount += 2;
    // printf("\n");
    $result .= "\n";
  }
  return $result;
}

echo pyramidPattern(5);
