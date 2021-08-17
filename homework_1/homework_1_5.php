<?php

$bmw = [
  'model' => 'X5',
  'speed' => 120,
  'doors' => 5,
  'years' => '2015',
  'name' => 'BMW'
];

$toyota = [
  'model' => 'Luna',
  'speed' => 140,
  'doors' => 8,
  'years' => '2012',
  'name' => 'Toyota'
];

$opel = [
  'model' => 'Tesla',
  'speed' => 160,
  'doors' => 2,
  'years' => '2010',
  'name' => 'Opel'
];

$all_cars = [$bmw, $toyota, $opel];

foreach ($all_cars as $item) {
  echo 'Car ' . $item['name'] . ': '  .  $item['model'] . ' ' . $item['speed'] . ' ' . $item['doors'] . ' ' . $item['years'] . '<br/>';
}
