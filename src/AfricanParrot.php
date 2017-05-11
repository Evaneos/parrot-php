<?php

namespace Parrot;

class AfricanParrot implements Parrot{

    /** @var int */
    private $numberOfCoconuts;

    /**
     * Constructor.
     *
     * @param int $numberOfCoconuts
     */
    public function __construct($numberOfCoconuts = 0)
    {
        $this->numberOfCoconuts = $numberOfCoconuts;
    }

    /**
     * @{inherited}
     */
    public function getSpeed() {
        return max(0, Parrot::BASE_SPEED - Parrot::LOAD_FACTOR * $this->numberOfCoconuts);
    }
}