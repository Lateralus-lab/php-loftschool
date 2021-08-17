<?php

$age = mt_rand(1, 100);

if ($age >= 18 && $age <= 65) {
  echo $age .  ' You still need to work for many years';
} elseif ($age > 65) {
  echo $age . ' It\'s time for retirement';
} elseif ($age <= 17) {
  echo $age . ' You\'re too young to work';
} else {
  echo 'Unknown age';
}
