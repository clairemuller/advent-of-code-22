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
  'X' => 1, // rock
  'B' => 2, // paper
  'Y' => 2, // paper
  'C' => 3, // scissors
  'Z' => 3, // scissors
];

$winner = [
  1 => 3, // rock beats scissors
  2 => 1, // paper beats rock
  3 => 2, // scissors beats paper
];

$total_score = 0;

foreach ($arr as $val) {
  $letters_arr = explode(" ", $val);
  // [ [0]=> "B", [1]=> "Y" ]
  
  $them = $points[$letters_arr[0]]; // 2
  $me   = $points[$letters_arr[1]]; // 2

  $total_score += $me; // add my score

  if ($them == $me) {
    // draw = 3
    $total_score += 3;
  } else if ($winner[$me] == $them) {
    // win = 6
    $total_score += 6;
  } else {
    // lose = 0
  }
}

echo($total_score);
