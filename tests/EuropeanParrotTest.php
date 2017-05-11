<?php

namespace Parrot;

class EuropeanParrotTest extends \PHPUnit_Framework_TestCase{

    /** @test */
    public function it_shoudl_be_fast_as_basic_parrot() {
       $parrot = new EuropeanParrot(0);
        $this->assertEquals(12.0, $parrot->getSpeed());
    }
}
