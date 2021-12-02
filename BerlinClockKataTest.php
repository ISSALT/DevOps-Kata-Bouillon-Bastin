<?php


use PHPUnit\Framework\TestCase;

require "BerlinClockKata.php";

class BerlinClockKataTest extends TestCase
{
    // Etape 1
    public function test00hO1m00s(){

        $berlinClockKata = new BerlinClockKata();

        $this->assertEquals("Y",$berlinClockKata->simpleMinute(1));
    }

    public function test00hO2m00s(){

        $berlinClockKata = new BerlinClockKata();

        $this->assertEquals("YY",$berlinClockKata->simpleMinute(2));
    }
    // Etape 2
    public function test00hO5m00s(){

        $berlinClockKata = new BerlinClockKata();

        $this->assertEquals("Y",$berlinClockKata->fiveMinutes(5));
    }

    public function test00h10m00s(){

        $berlinClockKata = new BerlinClockKata();

        $this->assertEquals("YY",$berlinClockKata->fiveMinutes(10));
    }

    public function test00h15m00s(){

        $berlinClockKata = new BerlinClockKata();

        $this->assertEquals("YYR",$berlinClockKata->fiveMinutes(15));
    }
}
