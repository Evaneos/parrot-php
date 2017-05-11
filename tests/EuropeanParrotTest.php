<?php

namespace Parrot;

class EuropeanParrotTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_always_fly_at_base_speed()
    {
        $parrot = new EuropeanParrot();
        $this->assertEquals(Parrot::BASE_SPEED, $parrot->getSpeed());
    }
}
