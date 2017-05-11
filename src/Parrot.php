<?php

namespace Parrot;

interface Parrot
{
    /** @var double */
    const BASE_SPEED = 12.0;

    /**
     * @return float
     */
    public function getSpeed();
}
