<?php

require 'src/sayHiFunc.php';

const TEST_CONSTANTA = 1;
$userName = "Igor";


if (TEST_CONSTANTA === 1) {
  echo sayHiFunc($userName);
}
