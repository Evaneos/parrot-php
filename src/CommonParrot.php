<?php

namespace Parrot;

abstract class CommonParrot implements Parrot {

    /** @var  double */
    protected $voltage;
    /** @var  boolean */
    protected $isNailed;

    /**
    * Parrot constructor.
    *
    * @param float $voltage
    * @param bool $isNailed
    */
    public function __construct($voltage, $isNailed) {
        $this->voltage = $voltage;
        $this->isNailed = $isNailed;
    }
}