<?php


use PHPUnit\Framework\TestCase;

require "BerlinClockKata.php";

class BerlinClockKataTest extends TestCase
{
    public function test00hO1m00s(){

        $berlinClockKata = new BerlinClockKata();

        $this->assertEquals("Y",$berlinClockKata->simpleMinute(1));
    }

    public function test00hO2m00s(){

        $berlinClockKata = new BerlinClockKata();

        $this->assertEquals("YY",$berlinClockKata->simpleMinute(2));
    }
}
