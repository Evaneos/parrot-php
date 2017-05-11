<?php

namespace Parrot;

class NorwegianBlueParrot implements Parrot {

    /** @var  double */
    private $voltage;
    /** @var  boolean */
    private $isNailed;

    /**
    * Parrot constructor.
    *
    * @param float $voltage
    * @param bool $isNailed
    */
    public function __construct($voltage, $isNailed) {
        $this->voltage = $voltage;
        $this->isNailed = $isNailed;
    }

    /**
     * @{inherited}
     */
    public function getSpeed() {
        return $this->isNailed ? 0 : $this->getBaseSpeedWith($this->voltage);
    }

    private function getBaseSpeedWith($voltage) {
        return min(24.0, $voltage * Parrot::BASE_SPEED);
    }
}