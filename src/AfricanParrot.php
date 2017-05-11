<?php

namespace Parrot;

class AfricanParrot extends Parrot
{
    /**
     * AfricanParrot constructor.
     *
     * @param int $nbCoconuts
     */
    public function __construct($nbCoconuts)
    {
        parent::__construct($nbCoconuts, null, false);
    }

    /**
     * @return float
     * @throws \Exception
     */
    public function getSpeed()
    {
        return max(0, Parrot::BASE_SPEED - Parrot::LOAD_FACTOR * $this->numberOfCoconuts);
    }
}
