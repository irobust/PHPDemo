<?php

// array(3, 4, 5);
// array(1 => 3, 4, 5);
// array();
// For PHP 5.4+
// [3, 4, 5]
// [1=>3, 4, 5]
// []
function sum($param){
  return array_sum($param);
}

echo sum(array(
  'a' => 10,
  'b' => 4
));

echo "<br/>";

$a = 10;
$b = 4;

echo sum(compact('a', 'b'));
