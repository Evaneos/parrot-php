<?php

namespace Parrot;

class AfricanParrot extends Parrot
{
    /**
     * @return float
     * @throws \Exception
     */
    public function getSpeed()
    {
        return max(0, Parrot::BASE_SPEED - Parrot::LOAD_FACTOR * $this->numberOfCoconuts);
    }
}
