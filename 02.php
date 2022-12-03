<?php
$str = file_get_contents('02-data.txt');

$arr = explode("\n", $str);

$rps = [
  'A' => 'rock',
  'X' => 'rock',
  'B' => 'paper',
  'Y' => 'paper',
  'C' => 'scissors',
  'Z' => 'scissors'
];

$scores = [
  'rock' => 1,
  'paper' => 2,
  'scissors' => 3,
];

$total_score = 0;

foreach ($arr as $val) {
  $arr2 = explode(" ", $val);

  $them = $rps[$arr2[0]];
  $me = $rps[$arr2[1]];

  $total_score += $scores[$me];

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
