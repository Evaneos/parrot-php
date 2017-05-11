<?php

namespace Parrot;

class Parrot {

  const BASE_SPEED = 12.0;
  const LOAD_FACTOR = 9.0;

  /** @var int ParrotTypeEnum */
  private $type;
  /** @var int */
  private $numberOfCoconuts = 0;
  /** @var  double */
  private $voltage;
  /** @var  boolean */
  private $isNailed;

  /**
   * Parrot constructor.
   * @param int $type
   * @param int $numberOfCoconuts
   * @param float $voltage
   * @param bool $isNailed
   */
  public function __construct($type, $numberOfCoconuts, $voltage, $isNailed) {
    $this->type = $type;
    $this->numberOfCoconuts = $numberOfCoconuts;
    $this->voltage = $voltage;
    $this->isNailed = $isNailed;
  }

  /**
   * @return float
   * @throws \Exception
   */
  public function getSpeed() {
    switch ($this->type) {
      case ParrotTypeEnum::EUROPEAN:
        return self::BASE_SPEED;
      case ParrotTypeEnum::AFRICAN:
        return max(0, self::BASE_SPEED - self::LOAD_FACTOR * $this->numberOfCoconuts);
      case ParrotTypeEnum::NORWEGIAN_BLUE:
        return $this->isNailed ? 0 : $this->getBaseSpeedWith($this->voltage);
    }
    throw new \Exception("Should be unreachable");
  }

  private function getBaseSpeedWith($voltage) {
    return min(24.0, $voltage * self::BASE_SPEED);
  }
}