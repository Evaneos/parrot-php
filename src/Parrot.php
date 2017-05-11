<?php

namespace Parrot;

abstract class Parrot
{
    /** @var double */
    const BASE_SPEED = 12.0;

    /** @var double */
    const LOAD_FACTOR = 9.0;

    /** @var double */
    const MAX_SPEED_WITH_VOLTAGE = 24.0;

    /** @var int */
    protected $numberOfCoconuts = 0;

    /** @var  double */
    protected $voltage;

    /** @var  boolean */
    protected $isNailed;

    /**
     * Parrot constructor.
     *
     * @param int   $numberOfCoconuts
     * @param float $voltage
     * @param bool  $isNailed
     */
    public function __construct($numberOfCoconuts, $voltage, $isNailed)
    {
        $this->numberOfCoconuts = $numberOfCoconuts;
        $this->voltage = $voltage;
        $this->isNailed = $isNailed;
    }

    /**
     * @return float
     * @throws \Exception
     */
    abstract public function getSpeed();

    /**
     * @param int   $numberOfCoconuts
     * @param float $voltage
     * @param bool  $isNailed
     *
     * @return Parrot
     */
    public static function europeanParrot($numberOfCoconuts, $voltage, $isNailed)
    {
        return new EuropeanParrot($numberOfCoconuts, $voltage, $isNailed);
    }

    /**
     * @param int   $numberOfCoconuts
     * @param float $voltage
     * @param bool  $isNailed
     *
     * @return Parrot
     */
    public static function africanParrot($numberOfCoconuts, $voltage, $isNailed)
    {
        return new AfricanParrot($numberOfCoconuts, $voltage, $isNailed);
    }

    /**
     * @param int   $numberOfCoconuts
     * @param float $voltage
     * @param bool  $isNailed
     *
     * @return Parrot
     */
    public static function norwegianBlueParrot($numberOfCoconuts, $voltage, $isNailed)
    {
        return new NorwegianBlueParrot($numberOfCoconuts, $voltage, $isNailed);
    }
}
