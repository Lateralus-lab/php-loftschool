<?php

class ServiceDriver implements ServiceInterface
{
  protected $serviceDriverPrice = 200;

  public function __construct(int $price)
  {
    $this->serviceDriverPrice = $price;
  }

  public function apply(TariffInterface $tariff)
  {
    return $this->serviceDriverPrice;
  }
}
