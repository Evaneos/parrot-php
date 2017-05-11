<?php

namespace Parrot;

class EuropeanParrot implements Parrot
{
    /**
     * @return float
     */
    public function getSpeed()
    {
        return Parrot::BASE_SPEED;
    }
}
