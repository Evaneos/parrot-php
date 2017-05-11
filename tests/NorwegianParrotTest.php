<?php

namespace Parrot;

class NorwegianParrotTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_not_ba_able_to_fly_if_it_is_nailed()
    {
        $parrot = new NorwegianBlueParrot(1000, true);
        $this->assertEquals(0.0, $parrot->getSpeed());
    }

    /** @test */
    public function it_should_not_ba_able_to_fly_if_there_is_no_voltage()
    {
        $parrot = new NorwegianBlueParrot(0, false);
        $this->assertEquals(0.0, $parrot->getSpeed());
    }

    /** @test */
    public function it_should_fly_if_given_voltage()
    {
        $parrot = new NorwegianBlueParrot(1, false);
        $this->assertGreaterThan(0.0, $parrot->getSpeed());
        $this->assertLessThan(NorwegianBlueParrot::MAX_SPEED_WITH_VOLTAGE, $parrot->getSpeed());
    }

    /** @test */
    public function it_should_not_fly_faster_than_max_speed()
    {
        $parrot = new NorwegianBlueParrot(10000, false);
        $this->assertEquals(NorwegianBlueParrot::MAX_SPEED_WITH_VOLTAGE, $parrot->getSpeed());
    }
}
