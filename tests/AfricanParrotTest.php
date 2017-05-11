<?php

namespace Parrot;

class AfricanParrotTest extends \PHPUnit_Framework_TestCase{

    /** @test */
    public function it_should_be_fast_as_basic_parrot_without_coconots() {
        $parrot = new AfricanParrot(0);
        $this->assertEquals(12.0, $parrot->getSpeed());
    }
}
