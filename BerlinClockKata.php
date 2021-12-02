<?php


class BerlinClockKata
{
    public function simpleMinute(int $minute):String{
        return str_repeat("Y",$minute%5);
    }

    public function fiveMinutes(int $minute):String{
        $lampe = $minute/5;
        $result = "";
        for ($i=1; $i<=$lampe; $i++){
            if ($i%3==0)
                $result.="R";
            else
                $result.="Y";
        }
        return $result;
    }

}