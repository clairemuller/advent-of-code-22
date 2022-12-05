<?php
$str = file_get_contents('02-data.txt');

// given:
// B Y
// A Z
// C Z
$arr = explode("\n", $str);
// get: [ [0]=> "B Y" [1]=> "A Z" [2]=> "C Z" ]

$points = [
  'A' => 1, // rock
  'B' => 2, // paper
  'C' => 3, // scissors
  'X' => 0, // lose
  'Y' => 3, // draw
  'Z' => 6, // win
];

$winner = [
  'A' => 'C', // rock beats scissors
  'B' => 'A', // paper beats rock
  'C' => 'B', // scissors beats paper
];

$total_score = 0;

foreach ($arr as $val) {
  $letters_arr = explode(" ", $val);
  // [ [0]=> "B", [1]=> "Y" ]

  $them   = $letters_arr[0];
  $result = $letters_arr[1];
  $total_score += $points[$result];

  if ($result == "X") {
    // x = lose = 0
    // find the value defeated by $result
    $me = $winner[$them];
  } else if ($result == "Y") {
    // Y = draw = 3
    $me = $them;
  } else if ($result == "Z") {
    // Z = win = 6
    $me = array_search($them, $winner);
  }

  $total_score += $points[$me];
}

echo($total_score);
