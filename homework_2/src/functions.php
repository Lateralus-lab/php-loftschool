<?php

# Task 1
function strHandler(array $str_array, bool $bool_val)
{
  $result = '';
  $arr_to_str = implode(' ', $str_array);

  foreach ($str_array as $el) {
    $result .= '<p>' . $el . '</p>';
  }
  return $bool_val ? $arr_to_str : $result;
}

# Task 2
/* function calcEverything(...$args) */
/* { */
/*   $operator = array_shift($args); */
/*   $sum_result = 0; */
/*   $result = 'Result: '; */

/*   if ($operator === '+') { */
/*     return '<br/>' . array_sum($args) . '<br/>'; */
/*   } elseif ($operator === '-') { */
/*     foreach ($args as $val) { */
/*       return $sum_result += $val; */
/*     } */
/*   } */
/* } */
