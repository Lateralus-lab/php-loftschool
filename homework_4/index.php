<?php

require 'classes/TariffInterface.php';
require 'classes/ServiceInterface.php';
require 'classes/TariffAbstract.php';
require 'classes/TariffBasic.php';
require 'classes/TariffStudent.php';
require 'classes/ServiceGPS.php';
require 'classes/ServiceDriver.php';
require 'classes/TariffHour.php';

$tariffBasic = new TariffBasic(10, 41);
$tariffBasic->addService(new ServiceGPS(15));
echo $tariffBasic->countPrice();

echo '<br/>';

$tariffStudent = new TariffStudent(10, 41);
$tariffStudent->addService(new ServiceDriver(100));
echo $tariffStudent->countPrice();
