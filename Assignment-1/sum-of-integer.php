<?php

function sumOfInteger(int $number)
{
  $array = str_split($number);
  $result = 0;
  foreach ($array as $key => $value) {
    $result += $value;
  }
  return $result;
}

echo sumOfInteger(464);
