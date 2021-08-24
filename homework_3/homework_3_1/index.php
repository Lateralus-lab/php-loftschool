<?php

require('src/functions.php');

# Task 1
$users = [];
$totalUsers = 50;

echo '<pre>';

for ($i = 0; $i < $totalUsers; $i++) {
  $id = $i;
  $users[] = task1($id);
}

json_encode($users);

file_put_contents('users.json', json_encode($users));

$usersJSON = file_get_contents('users.json');

$decodedJSON = json_decode($usersJSON, true);

$allUsers = [];
$sumAge = 0;

foreach ($decodedJSON as $users) {

  if ($users['name'] === $users['name']) {
    $allUsers[$users['name']]++;
  } else {
    $allUsers[$users['name']] = 1;
  }

  $sumAge += $users['age'];
}

echo ($sumAge / $totalUsers);
