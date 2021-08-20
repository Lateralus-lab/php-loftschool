<?php

# Task 1
function strHandler(array $strArray, bool $boolVal)
{
  if ($boolVal) {
    return implode(' ', $strArray);
  }

  foreach ($strArray as $el) {
    return '<p>' . implode(' </p><p>', $strArray) . '</p>';
  }
}

# Task 2
function calcEverything(...$args)
{
  $operator = array_shift($args);
  $result = 'Result: ';

  $operator === '*' ? $sum = 1 : $sum = 0;

  foreach ($args as $key => $val) {
    if ($operator === '+') {
      $sum += $val;
      $result .= ' ' . $val . ' +';
    } elseif ($operator === '*') {
      $sum *= $val;
      $result .= ' ' . $val . ' *';
    } elseif ($operator === '-') {
      if ($key === 0) {
        $sum = $val;
      } else {
        $sum -= $val;
      }
      $result .= ' ' . $val . ' -';
    } elseif ($operator === '/') {
      if ($key === 0) {
        $sum = $val;
      } else {
        $sum /= $val;
      }
      $result .= ' ' . $val . ' /';
    }
  }
  return '<br/>' . substr($result, 0, -1) . ' = ' . $sum;
}

# Task 3
function createTable(int $num1, int $num2)
{
  echo "<table>";

  for ($row = 1; $row <= $num1; $row++) {
    echo "<tr> \n";
    for ($col = 1; $col <= $num2; $col++) {
      $p = $col * $row;
      echo "<td>$p</td> \n";
    }
    echo "</tr>";
  }
  echo "</table>";
}

# Task 4
function showDate()
{
  $currTime = date('Y.m.d H:i:s');
  $unixTime =  mktime(0, 0, 0, 02, 24, 2016);

  return  $currTime . '<br/>' . 'unixtime ' . $unixTime;
}

# Task 5
function strChange(string $str1, string $str2)
{
  $removedCapital = str_ireplace('К', '', $str1);
  $replacedStr = str_replace('Две', 'Три', $str2);

  return '<br/>' . $removedCapital . '<br/>' . $replacedStr;
}

# Task 6
function createTxtFile(string $greeting, string $fileName)
{
  return '<br/>' . file_put_contents($fileName, $greeting);
}

function readFileIfExists(string $fileName)
{
  return file_exists($fileName) ? '<br/>' . file_get_contents($fileName) : '<br/>' . ' No file found';
}
