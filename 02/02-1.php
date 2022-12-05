<?php
$str = file_get_contents('02-data.txt');

// given:
// B Y
// A Z
// C Z
$arr = explode("\n", $str);
// get: [ [0]=> "B Y" [1]=> "A Z" [2]=> "C Z" ]

$letter_to_rps = [
  'A' => 'rock',
  'X' => 'rock',
  'B' => 'paper',
  'Y' => 'paper',
  'C' => 'scissors',
  'Z' => 'scissors'
];

$rps_scores = [
  'rock' => 1,
  'paper' => 2,
  'scissors' => 3,
];

$total_score = 0;

foreach ($arr as $val) {
  $letters_arr = explode(" ", $val);
  // [ [0]=> "B", [1]=> "Y" ]

  $them = $letter_to_rps[$letters_arr[0]];
  $me = $letter_to_rps[$letters_arr[1]];

  $total_score += $rps_scores[$me];

  // lost => 0
  // draw => 3
  // win => 6

  if (strlen($them) != 0 && strlen($me) != 0 && $them == $me) {
    // draw
    $total_score += 3;
  } else if (($me == 'rock' && $them == 'scissors') || ($me == 'paper' && $them == 'rock') || ($me == 'scissors' && $them == 'paper')) {
    // I win
    $total_score += 6;
  } else {
    // I lose
  }
}

echo($total_score);
