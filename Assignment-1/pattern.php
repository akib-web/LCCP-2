<?php

function pyramidPattern(int $length)
{
  $starCount = 1;
  for ($loop = 1; $loop <= $length; $loop++) {
    $space = $length - 1;
    for ($stars = 0; $stars < $starCount; $stars++) {
      for ($space; $space >= $loop; $space--) {
        printf(" ");
      }
      printf("*");
    }
    $starCount += 2;
    printf("\n");
  }
}
pyramidPattern(3);
