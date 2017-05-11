<?php

namespace Parrot;

class ParrotTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function get_speed_of_european_parrot()
    {
        $parrot = Parrot::europeanParrot(0, 0, false);
        $this->assertEquals(Parrot::BASE_SPEED, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_of_european_parrot_with_one_coconut()
    {
        $parrot = Parrot::europeanParrot(1, 0, false);
        $this->assertEquals(Parrot::BASE_SPEED, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_of_european_parrot_with_voltage()
    {
        $parrot = Parrot::europeanParrot(0, 1, false);
        $this->assertEquals(Parrot::BASE_SPEED, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_of_nailed_european_parrot()
    {
        $parrot = Parrot::europeanParrot(0, 0, true);
        $this->assertEquals(Parrot::BASE_SPEED, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_of_african_parrot_with_no_coconuts()
    {
        $parrot = Parrot::africanParrot(0, 0, false);
        $this->assertEquals(Parrot::BASE_SPEED, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_of_african_parrot_with_one_coconut()
    {
        $parrot = Parrot::africanParrot(1, 0, false);
        $this->assertEquals(3.0, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_of_african_parrot_with_voltage()
    {
        $parrot = Parrot::africanParrot(0, 1, false);
        $this->assertEquals(Parrot::BASE_SPEED, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_of_nailed_african_parrot()
    {
        $parrot = Parrot::africanParrot(0, 0, true);
        $this->assertEquals(Parrot::BASE_SPEED, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_norwegian_blue_parrot_nailed()
    {
        $parrot = Parrot::norwegianBlueParrot(0, 0, true);
        $this->assertEquals(0.0, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_norwegian_blue_parrot_not_nailed_with_no_voltage()
    {
        $parrot = Parrot::norwegianBlueParrot(0, 0, false);
        $this->assertEquals(0.0, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_norwegian_blue_parrot_not_nailed_with_one_volt()
    {
        $parrot = Parrot::norwegianBlueParrot(0, 1, false);
        $this->assertEquals(Parrot::BASE_SPEED, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_norwegian_blue_parrot_not_nailed_with_two_volts()
    {
        $parrot = Parrot::norwegianBlueParrot(0, 1.5, false);
        $this->assertEquals(1.5*Parrot::BASE_SPEED, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_norwegian_blue_parrot_not_nailed_high_voltage()
    {
        $parrot = Parrot::norwegianBlueParrot(0, 4, false);
        $this->assertEquals(Parrot::MAX_SPEED_WITH_VOLTAGE, $parrot->getSpeed());
    }

    /** @test */
    public function get_speed_norwegian_blue_parrot_not_nailed_with_one_volt_and_one_coconut()
    {
        $parrot = Parrot::norwegianBlueParrot(1, 1, false);
        $this->assertEquals(Parrot::BASE_SPEED, $parrot->getSpeed());
    }
}
