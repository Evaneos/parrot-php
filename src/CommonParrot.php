<?php

namespace Parrot;

abstract class CommonParrot implements Parrot {

    /** @var int ParrotTypeEnum */
    protected $type;
    /** @var int */
    protected $numberOfCoconuts = 0;
    /** @var  double */
    protected $voltage;
    /** @var  boolean */
    protected $isNailed;

    /**
    * Parrot constructor.
    *
    * @param int $type
    * @param int $numberOfCoconuts
    * @param float $voltage
    * @param bool $isNailed
    */
    public function __construct($type, $numberOfCoconuts, $voltage, $isNailed) {
        $this->type = $type;
        $this->numberOfCoconuts = $numberOfCoconuts;
        $this->voltage = $voltage;
        $this->isNailed = $isNailed;
    }
}