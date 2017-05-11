<?php

namespace Parrot;

class EuropeanParrotTest extends \PHPUnit_Framework_TestCase{

    /** @test */
    public function get_speed() {
       $parrot = new EuropeanParrot(ParrotTypeEnum::EUROPEAN, 0,0, false);
        $this->assertEquals(12.0, $parrot->getSpeed());
    }
}
