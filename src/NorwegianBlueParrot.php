<?php

namespace Parrot;

class NorwegianBlueParrot extends Parrot
{
    /**
     * NorwegianBlueParrot constructor.
     *
     * @param float $voltage
     * @param bool  $isNailed
     */
    public function __construct($voltage, $isNailed)
    {
        parent::__construct(null, $voltage, $isNailed);
    }

    /**
     * @return float
     * @throws \Exception
     */
    public function getSpeed()
    {
        return $this->isNailed ? 0 : $this->getBaseSpeedWithVoltage();
    }

    /**
     * @return double
     */
    private function getBaseSpeedWithVoltage()
    {
        return min(Parrot::MAX_SPEED_WITH_VOLTAGE, $this->voltage * Parrot::BASE_SPEED);
    }
}
