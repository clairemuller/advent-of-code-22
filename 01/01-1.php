<?php
$str = file_get_contents('01-data.txt');

$arr = explode("\n", $str);

// will look like:
// [ [0]=> "1000" [1]=> "2000" [2]=> "3000" [3]=> "" [4]=> "4000" [5]=> "" [6]=> "5000" [7]=> "6000" [8]=> "" [9]=> "7000" [10]=> "8000" [11]=> "9000" [12]=> "" [13]=> "10000" [14]=> "" ]

$mostCalories = 0;
$currentCalCount = 0;

foreach ($arr as $value) {
  // add each $value to $currentCalCount until $value is an empty string
  // then see if $currentCalCount is greater than $mostCalories
  // if so, update $mostCalories
  if (strlen($value) == 0) {
    if ($currentCalCount > $mostCalories) {
      $mostCalories = $currentCalCount;
    }
    $currentCalCount = 0;
  } else {
    $currentCalCount += $value;
  }
}

// answer is:
echo $mostCalories;
