<?php
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
