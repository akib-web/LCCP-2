<?php

function reverseStringByWords(string $string)
{
  $words = explode(' ', $string);

  $result = '';
  foreach ($words as $word) {
    $result .= ' ' . strrev($word);
  }
  return $result;
}

echo reverseStringByWords('I love programming');
