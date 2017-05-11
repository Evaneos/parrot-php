<?php

namespace Parrot;

interface Parrot {

    const BASE_SPEED = 12.0;
    const LOAD_FACTOR = 9.0;

    /**
    * @return float
    * @throws \Exception
    */
    public function getSpeed();
}