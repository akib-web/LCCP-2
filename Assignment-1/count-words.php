<?php
$sample_string = "Nunc ex lorem, ullamcorper ut eleifend ac, pellentesque non dolor.";

function getWordsCount(string $filename)
{
  $fh = fopen($filename, 'r');
  $content = fread($fh, filesize($filename));
  fclose($fh);

  $content = preg_replace('/\s\r\t\n+/', '', $content);
  $words = explode(" ", $content);

  // return $words;
  return count($words);
}

$filename = "count-word-paragraph.txt";

print_r(getWordsCount($filename));
