<?php

namespace Parrot;

class AfricanParrotTest extends \PHPUnit_Framework_TestCase{

    /** @test */
    public function get_speed_with_no_coconuts() {
        $parrot = new AfricanParrot(0,0, false);
        $this->assertEquals(12.0, $parrot->getSpeed());
    }
}
