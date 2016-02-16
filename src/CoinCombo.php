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

        }elseif($input % 25 !== 0){
            $quarter = floor($input / 25);
            array_push($change, $quarter);
            $remainder = $input % 25;

            if($remainder % 10 == 0){
                $dime = $remainder / 10;
                array_push($change, $dime);

            }elseif($remainder % 10 !== 0){
                $dime = floor($remainder / 10);
                array_push($change, $dime);
                $remainder = $remainder % 10;

                if($remainder % 5 == 0){
                    $nickel = $remainder / 5;
                    array_push($change, $nickel);

                }elseif($remainder % 5 !== 0){
                    $nickel = floor($remainder / 5);
                    $penny = $remainder % 5;
                    array_push($change, $nickel, $penny);

                }
            }
        }
        return $change;
    }






}

?>
