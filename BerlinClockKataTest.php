<?php


use PHPUnit\Framework\TestCase;

require "BerlinClockKata.php";

class BerlinClockKataTest extends TestCase
{
    // Etape 1
    public function test00hO1m00s(){

        $berlinClockKata = new BerlinClockKata();

        $seconde = 1*60;

        $this->assertEquals("Y",$berlinClockKata->simpleMinute($seconde));
    }

    public function test00hO2m00s(){

        $berlinClockKata = new BerlinClockKata();

        $seconde = 2*60;

        $this->assertEquals("YY",$berlinClockKata->simpleMinute($seconde));
    }
    // Etape 2
    public function test00hO5m00s(){

        $berlinClockKata = new BerlinClockKata();

        $seconde = 5*60;

        $this->assertEquals("Y",$berlinClockKata->fiveMinutes($seconde));
    }

    public function test00h10m00s(){

        $berlinClockKata = new BerlinClockKata();

        $seconde = 10*60;

        $this->assertEquals("YY",$berlinClockKata->fiveMinutes($seconde));
    }

    public function test00h15m00s(){

        $berlinClockKata = new BerlinClockKata();

        $seconde = 15*60;

        $this->assertEquals("YYR",$berlinClockKata->fiveMinutes($seconde));
    }
    public function test00h35m00s(){

        $berlinClockKata = new BerlinClockKata();

        $seconde = 35*60;

        $this->assertEquals("YYRYYRY",$berlinClockKata->fiveMinutes($seconde));
    }

    public function test00h18m00s(){

        $berlinClockKata = new BerlinClockKata();

        $seconde = 18*60;

        $this->assertEquals("YYR",$berlinClockKata->fiveMinutes($seconde));
        $this->assertEquals("YYY",$berlinClockKata->simpleMinute($seconde));
    }

    // Etape 3
    public function test01h00m00s(){

        $berlinClockKata = new BerlinClockKata();

        $seconde = 1*60*60;

        $this->assertEquals("R",$berlinClockKata->simpleHour($seconde));
    }

    public function test02h00m00s(){

        $berlinClockKata = new BerlinClockKata();

        $seconde = 2*60*60;

        $this->assertEquals("RR",$berlinClockKata->simpleHour($seconde));
    }

    public function test02h10m00s(){

        $berlinClockKata = new BerlinClockKata();

        $seconde = 2*60*60 + 10*60;

        $this->assertEquals("RR",$berlinClockKata->simpleHour($seconde));
        $this->assertEquals("YY",$berlinClockKata->fiveMinutes($seconde));
    }
    public function test02h11m00s(){

        $berlinClockKata = new BerlinClockKata();

        $seconde = 2*60*60 + 11*60;

        $this->assertEquals("RR",$berlinClockKata->simpleHour($seconde));
        $this->assertEquals("YY",$berlinClockKata->fiveMinutes($seconde));
        $this->assertEquals("Y",$berlinClockKata->simpleMinute($seconde));
    }

    //Etape 4
    public function test05h00m00s(){
        $berlinClockKata = new BerlinClockKata();

        $seconde = 5*60*60;

        $this->assertEquals("R",$berlinClockKata->fiveHours($seconde));
    }

    public function test10h00m00s(){
        $berlinClockKata = new BerlinClockKata();

        $seconde = 10*60*60;

        $this->assertEquals("RR",$berlinClockKata->fiveHours($seconde));
    }

    public function test11h00m00s(){
        $berlinClockKata = new BerlinClockKata();

        $seconde = 11*60*60;

        $this->assertEquals("RR",$berlinClockKata->fiveHours($seconde));
        $this->assertEquals("R",$berlinClockKata->simpleHour($seconde));
    }

    public function test11h06m00s(){
        $berlinClockKata = new BerlinClockKata();

        $seconde = 11*60*60 + 6*60;

        $this->assertEquals("RR",$berlinClockKata->fiveHours($seconde));
        $this->assertEquals("R",$berlinClockKata->simpleHour($seconde));
        $this->assertEquals("Y",$berlinClockKata->fiveMinutes($seconde));
        $this->assertEquals("Y",$berlinClockKata->simpleMinute($seconde));
    }

    //Etape 6
}
