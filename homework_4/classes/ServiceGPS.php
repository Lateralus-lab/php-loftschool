<?php

class ServiceGPS implements ServiceInterface
{
  private $pricePerHour;

  public function __construct(int $pricePerHour)
  {
    $this->pricePerHour = $pricePerHour;
  }

  public function apply(TariffInterface $tariff)
  {
    $hours = ceil($tariff->getMinutes() / 60);
    return $this->pricePerHour * $hours;
  }
}
