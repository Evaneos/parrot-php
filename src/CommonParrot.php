<?php

namespace Parrot;

abstract class CommonParrot implements Parrot {

    /** @var int */
    protected $numberOfCoconuts = 0;
    /** @var  double */
    protected $voltage;
    /** @var  boolean */
    protected $isNailed;

    /**
    * Parrot constructor.
    *
    * @param int $numberOfCoconuts
    * @param float $voltage
    * @param bool $isNailed
    */
    public function __construct($numberOfCoconuts, $voltage, $isNailed) {
        $this->numberOfCoconuts = $numberOfCoconuts;
        $this->voltage = $voltage;
        $this->isNailed = $isNailed;
    }
}