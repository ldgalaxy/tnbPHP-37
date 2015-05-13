<?php

$string = ' This is and example string. ';
$string_trimmed = trim($string); //trim white space from both sides

$string_trimmed = ltrim($string); //trim white space from left side
$string_trimmed = trim($string);  //trim white space from right side
echo $string_trimmed;


?>
