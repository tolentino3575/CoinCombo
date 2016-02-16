<?php

class CoinCombo
{
    function amtOutput($input)
    {
        return $input;
    }

    function divideOutput($input)
    {
        $change = array();
        if ($input % 25 == 0){
            return $input / 25;
        } elseif($input % 25 !== 0){
            $quarter = round($input / 25);
            array_push($change, $quarter);
            $remainder = $input % 25;
            if($remainder % 10 == 0){
                $dime = $remainder / 10;
                array_push($change, $dime);
            } elseif($input % 10 !== 0){
                $dime = round($input / 10);
                array_push($change, $dime);
                $remainder = $input % 10;
            }
        }
        return $change;
    }






}

?>
