<?php

$day = mt_rand(1, 7);

switch ($day) {
  case 7:
  case 6:
    echo $day .  ' is weekend';
    break;
  case 5:
  case 4:
  case 3:
  case 2:
  case 1:
    echo $day . ' is working day';
    break;
  default:
    echo $day . ' Unknown day';
    break;
}
