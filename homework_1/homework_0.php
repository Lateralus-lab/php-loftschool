<?php

require 'src/sayHiFunc.php';

const TEST_CONSTANTA = 1;
$user_name = "Igor";


if (TEST_CONSTANTA === 1) {
  echo sayHiFunc($user_name);
}
