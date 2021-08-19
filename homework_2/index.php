<?php

require 'src/functions.php';

# Task 1
$strArray = ['mars', 'saturn', 'earth', 'moon'];

echo strHandler($strArray, false);

die();

# Task 2
echo calcEverything('+', 1, 2, 3, 5.2);
echo calcEverything('-', 20, 3, 2);
echo calcEverything('*', 2, 2, 2);
echo calcEverything('/', 100, 2);

# Task 3
createTable(8, 8);

# Task 4
echo showDate();

# Task 5
$str1 = 'Карл у Клары украл Кораллы';
$str2 = 'Две бутылки лимонада';

echo strChange($str1, $str2);

# Task 6

$greeting = 'Hello again!';
$fileName = 'test.txt';

createTxtFile($greeting, $fileName);
echo readFileIfExists($fileName);
