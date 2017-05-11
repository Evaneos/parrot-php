<?php

namespace Parrot;

class NorwegianBlueParrotTest extends \PHPUnit_Framework_TestCase{

    /** @test */
    public function it_should_not_fly_if_it_is_nailed() {
        $parrot = new NorwegianBlueParrot(0,true);
        $this->assertEquals(0.0, $parrot->getSpeed());
    }

    /** @test */
    public function it_should_fly_faster_with_voltage() {
        $parrot = new NorwegianBlueParrot(4, false);
        $this->assertEquals(24.0, $parrot->getSpeed());
    }
}
