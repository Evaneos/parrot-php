<?php

namespace Parrot;

class NorwegianBlueParrotTest extends \PHPUnit_Framework_TestCase{

    /** @test */
    public function get_speed_nailed() {
        $parrot = new NorwegianBlueParrot(ParrotTypeEnum::NORWEGIAN_BLUE, 0,0,true);
        $this->assertEquals(0.0, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_not_nailed_high_voltage() {
        $parrot = new NorwegianBlueParrot(ParrotTypeEnum::NORWEGIAN_BLUE, 0,4, false);
        $this->assertEquals(24.0, $parrot->getSpeed());
    }
}
