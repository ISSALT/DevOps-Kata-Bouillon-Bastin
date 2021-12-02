<?php


class BerlinClockKata
{
    public function simpleMinute(int $minute):String{
        return str_repeat("Y",$minute);
    }

    public function fiveMinutes(int $minute):String{
        return "Y";
    }

}