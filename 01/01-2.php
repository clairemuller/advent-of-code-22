<?php
$str = file_get_contents('01-data.txt');

$arr = explode("\n", $str);

// will look like:
// [ [0]=> "1000" [1]=> "2000" [2]=> "3000" [3]=> "" [4]=> "4000" [5]=> "" [6]=> "5000" [7]=> "6000" [8]=> "" [9]=> "7000" [10]=> "8000" [11]=> "9000" [12]=> "" [13]=> "10000" [14]=> "" ]

$caloriesArray = [];
$currentCalCount = 0;

foreach ($arr as $value) {
  // add each $value to $currentCalCount until $value is an empty string
  // then put $currentCalCount into $caloriesArray
  if (strlen($value) == 0) {
    array_push($caloriesArray, $currentCalCount);
    $currentCalCount = 0;
  } else {
    $currentCalCount += $value;
  }
}

// sort array, get top three, and add them up!
rsort( $caloriesArray );
$top_three = array_slice( $caloriesArray, 0, 3);
$sum = array_sum( $top_three );
echo( $sum );
