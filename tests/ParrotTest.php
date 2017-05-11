<?php

namespace Parrot;

class ParrotTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function get_speed_of_european_parrot()
    {
        $parrot = new EuropeanParrot();
        $this->assertEquals(Parrot::BASE_SPEED, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_of_african_parrot_with_no_coconuts()
    {
        $parrot = new AfricanParrot(0);
        $this->assertEquals(Parrot::BASE_SPEED, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_of_african_parrot_with_one_coconut()
    {
        $parrot = new AfricanParrot(1);
        $this->assertEquals(3.0, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_norwegian_blue_parrot_nailed()
    {
        $parrot = new NorwegianBlueParrot(0, true);
        $this->assertEquals(0.0, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_norwegian_blue_parrot_not_nailed_with_no_voltage()
    {
        $parrot = new NorwegianBlueParrot(0, false);
        $this->assertEquals(0.0, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_norwegian_blue_parrot_not_nailed_with_one_volt()
    {
        $parrot = new NorwegianBlueParrot(1, false);
        $this->assertEquals(Parrot::BASE_SPEED, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_norwegian_blue_parrot_not_nailed_with_two_volts()
    {
        $parrot = new NorwegianBlueParrot(1.5, false);
        $this->assertEquals(1.5*Parrot::BASE_SPEED, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_norwegian_blue_parrot_not_nailed_high_voltage()
    {
        $parrot = new NorwegianBlueParrot(4, false);
        $this->assertEquals(NorwegianBlueParrot::MAX_SPEED_WITH_VOLTAGE, $parrot->getSpeed());
    }
}
