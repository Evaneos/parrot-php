<?php

namespace Parrot;

class EuropeanParrot extends Parrot
{
    /**
     * @return float
     * @throws \Exception
     */
    public function getSpeed()
    {
        return Parrot::BASE_SPEED;
    }
}
