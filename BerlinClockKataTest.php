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
    public function test00h35m00s(){

        $berlinClockKata = new BerlinClockKata();

        $this->assertEquals("YYRYYRY",$berlinClockKata->fiveMinutes(35));
    }

    public function test00h18m00s(){

        $berlinClockKata = new BerlinClockKata();

        $this->assertEquals("YYR",$berlinClockKata->fiveMinutes(18));
        $this->assertEquals("YYY",$berlinClockKata->simpleMinute(18));
    }

    // Etape 3
    public function test01h00m00s(){

        $berlinClockKata = new BerlinClockKata();

        $this->assertEquals("R",$berlinClockKata->simpleHour(60));
    }

    public function test02h00m00s(){

        $berlinClockKata = new BerlinClockKata();

        $this->assertEquals("RR",$berlinClockKata->simpleHour(120));
    }

}
