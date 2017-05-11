<?php

namespace Parrot;

class AfricanParrot implements Parrot
{
    /** @var double */
    const LOAD_FACTOR = 9.0;

    /** @var int */
    protected $numberOfCoconuts = 0;

    /**
     * AfricanParrot constructor.
     *
     * @param int $numberOfCoconuts
     */
    public function __construct($numberOfCoconuts)
    {
        $this->numberOfCoconuts = $numberOfCoconuts;
    }

    /**
     * @return float
     */
    public function getSpeed()
    {
        return max(0, Parrot::BASE_SPEED - self::LOAD_FACTOR * $this->numberOfCoconuts);
    }
}
