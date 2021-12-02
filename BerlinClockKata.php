<?php


class BerlinClockKata
{
    public function simpleMinute(int $seconde):String{
        return str_repeat("Y",($seconde/60)%5);
    }

    public function fiveMinutes(int $seconde):String{
        $lampe = (($seconde/60)%60)/5;
        $result = "";
        for ($i=1; $i<=$lampe; $i++){
            if ($i%3==0)
                $result.="R";
            else
                $result.="Y";
        }
        return $result;
    }

    public function simpleHour(int $seconde):String{
        return str_repeat("R",(($seconde/60)/60)%5);
    }

    public function fiveHours(int $seconde):String{
        return str_repeat("R",(($seconde/60)/60)/5);
    }

}