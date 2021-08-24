<?php

# Task 1
function task1($id)
{
  $namesArr = ['John', 'Jessica', 'Ben', 'Thomas', 'Hayley'];

  return [
    'id' => $id,
    'name' => $namesArr[array_rand($namesArr)],
    'age' => rand(18, 45)
  ];
}
