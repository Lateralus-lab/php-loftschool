<?php

$bmw = [
  'model' => 'X5',
  'speed' => 120,
  'doors' => 5,
  'years' => '2015',
  'name' => 'bmw'
];

$toyota = [
  'model' => 'Luna',
  'speed' => 140,
  'doors' => 8,
  'years' => '2012',
  'name' => 'toyota'
];

$opel = [
  'model' => 'Tesla',
  'speed' => 160,
  'doors' => 2,
  'years' => '2010',
  'name' => 'opel'
];

$allCars = [$bmw, $toyota, $opel];



foreach ($allCars as $item) {
  echo 'CAR ' . $item['name'] . ': ' . '<br/>'  .  $item['model'] . ' ' . $item['speed'] . ' ' . $item['doors'] . ' ' . $item['years'] . '<br/>';
}
