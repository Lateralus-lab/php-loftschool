<?php

interface TariffInterface
{
  public function countPrire(): int;
  public function addService(ServiceInterface $service): self;
  public function getMinutes(): int;
  public function getDistance(): int;
}
