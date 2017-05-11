<?php

namespace Parrot;

class AfricanParrotTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_fly_at_base_speed_if_it_carries_no_coconut()
    {
        $parrot = new AfricanParrot(0);
        $this->assertEquals(Parrot::BASE_SPEED, $parrot->getSpeed());
    }

    /** @test */
    public function it_should_fly_at_reduced_speed_if_it_carries_a_coconut()
    {
        $parrot = new AfricanParrot(1);
        $this->assertGreaterThanOrEqual(0.0, $parrot->getSpeed());
        $this->assertLessThan(Parrot::BASE_SPEED, $parrot->getSpeed());
    }

    /** @test */
    public function it_should_not_be_able_to_fly_if_it_carries_too_many_coconuts()
    {
        $parrot = new AfricanParrot(1000);
        $this->assertEquals(0.0, $parrot->getSpeed());
    }
}
