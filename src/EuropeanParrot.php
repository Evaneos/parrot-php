<?php

namespace Parrot;

class EuropeanParrot extends Parrot
{
    /**
     * EuropeanParrot constructor.
     */
    public function __construct()
    {
        parent::__construct(null, null, false);
    }

    /**
     * @return float
     * @throws \Exception
     */
    public function getSpeed()
    {
        return Parrot::BASE_SPEED;
    }
}
