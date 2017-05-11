<?php

namespace Parrot;

class AfricanParrotTest extends \PHPUnit_Framework_TestCase{

    /** @test */
    public function it_should_be_fast_as_basic_parrot_without_coconots() {
        $parrot = new AfricanParrot();
        $this->assertEquals(12.0, $parrot->getSpeed());
    }

    /** @test */
    public function it_should_fly_slower_with_coconuts()
    {
        $parrot = new AfricanParrot(1);
        $this->assertEquals(3.0, $parrot->getSpeed());
    }

    /** @test */
    public function it_should_not_be_able_to_fly_with_to_much_coconuts()
    {
        $parrot = new AfricanParrot(2);
        $this->assertEquals(0.0, $parrot->getSpeed());
    }
}
