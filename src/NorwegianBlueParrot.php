<?php

namespace Parrot;

class NorwegianBlueParrot implements Parrot
{
    /** @var double */
    const MAX_SPEED_WITH_VOLTAGE = 24.0;

    /** @var  double */
    protected $voltage;

    /** @var  boolean */
    protected $isNailed;

    /**
     * NorwegianBlueParrot constructor.
     *
     * @param float $voltage
     * @param bool  $isNailed
     */
    public function __construct($voltage, $isNailed)
    {
        $this->voltage = $voltage;
        $this->isNailed = $isNailed;
    }

    /**
     * @return float
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
        return min(self::MAX_SPEED_WITH_VOLTAGE, $this->voltage * Parrot::BASE_SPEED);
    }
}
