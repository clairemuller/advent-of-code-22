<?php
$str = file_get_contents('01-data.txt');

$arr = explode("\n", $str);

// will look like:
// [ [0]=> "1000" [1]=> "2000" [2]=> "3000" [3]=> "" [4]=> "4000" [5]=> "" [6]=> "5000" [7]=> "6000" [8]=> "" [9]=> "7000" [10]=> "8000" [11]=> "9000" [12]=> "" [13]=> "10000" [14]=> "" ]

var_dump($arr);

// foreach ($arr as $value) {
//   echo $value;
// }

// echo $str;
