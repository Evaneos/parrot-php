<?php

namespace Parrot;

class CommonParrot implements Parrot {
    /** @var int ParrotTypeEnum */
    protected $type;
    /** @var int */
    protected $numberOfCoconuts = 0;
    /** @var  double */
    protected $voltage;
    /** @var  boolean */
    protected $isNailed;

    /**
    * Parrot constructor.
    *
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
     * @{inherited}
     */
    public function getSpeed() {
        switch ($this->type) {
            case ParrotTypeEnum::EUROPEAN:
                return Parrot::BASE_SPEED;
            case ParrotTypeEnum::AFRICAN:
                return max(0, Parrot::BASE_SPEED - Parrot::LOAD_FACTOR * $this->numberOfCoconuts);
            case ParrotTypeEnum::NORWEGIAN_BLUE:
                return $this->isNailed ? 0 : $this->getBaseSpeedWith($this->voltage);
        }
        throw new \Exception("Should be unreachable");
    }

    private function getBaseSpeedWith($voltage) {
        return min(24.0, $voltage * Parrot::BASE_SPEED);
    }
}